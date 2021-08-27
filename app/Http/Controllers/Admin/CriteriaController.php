<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Choice;
use App\Models\ProductAssigned;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CriteriaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->gender) {
            $gender = $request->gender;
        } else {
            $gender = 2;
        }
        $criteria = Criteria::orderby('criteria_serial', 'ASC')
                            ->where('criteria_gender', $gender)
                            ->get();
        return view('admin.criteria.index', compact('criteria', 'gender'));
    }

    public function store(Request $request)
    {
        $data = new Criteria();
        $data->criteria_name = $request->criteria_name; //The criteria name should be fetched in the front end
        $data->criteria_gender = $request->criteria_gender;
        $data->save(); //Save button Should save The criteria name

        Criteria::where('id', $data->id)->update([ 'criteria_serial' => $data->id ]);

        Session::flash('success', "Criteria added successfully !");
        return redirect()->route('admin.criteria.choice.edit', ['id' => $data->id ]);
    }

    public function choise_store(Request $request)
    {

        $request->validate([
            'choice_name' => 'string|unique:choices|max:255',
            'slug' => 'string|unique:choices|max:255',
            'google_title' => 'string|unique:choices|max:255',
        ]);
        // $this->validate($request, [
        //     'title'         => 'required|min:3|max:255',
        //     'slug'          => 'required|min:3|max:255|unique:posts',
        //     'description'   => 'required|min:3'
        // ]);
        // $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
        // $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
        $data = new Choice();
        $data->criteria_id = $request->criteria_id;
        $data->choice_name = $request->choice_name; //Choice name
        $data->choice_text = $request->choice_text; //Choice text
        $data->slug = $request->slug; //Choice slug
        $data->google_title = $request->google_title; //google_title
        $data->choice_picture = $request->choice_picture;
        $data->save(); //Save button Should save The criteria id choices name, text and picture Are saved in the database
        Session::flash('success', "Choice added successfully !");
        return redirect()->route('admin.criteria.choice.edit', ['id' => $data->criteria_id ]);
    }

    public function edit(Request $request)
    {
        $data = Criteria::find($request->id);
        return response()->json($data);
    }
    // When admin click on edit it will be able to edit the criteria name and the related choices name and choices text

    public function criteria_choice_edit(Request $request)
    {
        $criteria_info = Criteria::find($request->id);
        $criteria_id = $request->id;
        if ($request->gender) {
            $criteria_gender = $request->gender;
        } else {
            $criteria_gender = $criteria_info->criteria_gender;
        }
        $criteria = Criteria::orderby('criteria_serial', 'ASC')
                            ->where('criteria_gender', $criteria_gender)
                            ->get();
        $choices = Choice::where('criteria_id', $request->id)->get();
        return view('admin.criteria.edit', compact('criteria', 'choices', 'criteria_id', 'criteria_gender'));
    }
    public function showeditmodal(Request $request)
    {
        $choice  = Choice::find($request->id);
        return response()->json($choice);
    }
    public function editChoice(Request $request)
    {

        $data = Choice::find($request->choice_id);
        if($request->choicename == $data->choice_name) {
            $choice_name = $data->choice_name;
        } else {
            $request->validate([
                'choicename' => 'string|unique:choices,choice_name|max:255'.$request->choice_id,
            ]);
            $choice_name = $request->choicename;
        }

        if($request->choice_picture) {

            //delete old choice picture
            $image_path = $data->choice_picture;

            if(file_exists($image_path)){
                unlink($image_path);
            }

           //The picture should be resizable, the standard size should be shown to make it easy to fit
            $folderPath = 'public/assets/choice/';
            $image_parts = explode(";base64,", $request->choice_picture);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imageName = uniqid() . '.png';
            $imageFullPath = $folderPath.$imageName;
            file_put_contents($imageFullPath, $image_base64);
            $choice_picture = $imageFullPath;
        } else {
            $choice_picture = $data->choice_picture;
        }
        $data->choice_name = $choice_name;
        $data->choice_text = $request->update_choice_text;
        $data->choice_picture = $choice_picture;
        $data->save();
        Session::flash('success', "Choice updated successfully !");
        return redirect()->back();
    }


    public function update(Request $request)
    {
        //Criteria update by admin
        if(Criteria::find($request->id)) {
            Criteria::where('id', $request->id)
                    ->update([ 'criteria_name' => $request->criteria_name ]);
                    //Admin can update criteria name
            Session::flash('success', "Criteria updated successfully !");
        } else {
            Session::flash('danger', "Criteria not found !");
        }
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        //When admin click on delete criteria button, criteria will be deleted
        $data = Criteria::findorFail($request->id);
        if($data){
            $id = $data->id;
            // delete criteria on criteria table
            $data->delete();
            // delete choice of this criteria
            $choices = Choice::where('criteria_id',$id)->get();
            foreach ($choices as $key => $value) {
                $choice = Choice::findorFail($value->id);
                $image_path1 = $choice->choice_picture;
                if(file_exists($image_path1)){
                    unlink($image_path1);
                }
                $choices->delete();
            }

            // delete product assigned of this criteria
            $product_assigneds = ProductAssigned::where('criteria_id',$id);
            if($product_assigneds){
                $product_assigneds->delete();
            }


            Criteria::where('criteria_serial', '>', $id)->decrement('criteria_serial');
            Session::flash('warning', "Criteria deleted successfully !");
            return  Redirect::back();
        }else {
            Session::flash('warning', "This criteria does not exist !");
            return  Redirect::back();
        }

    }

    public function choise_crop(Request $request)
    {
        //The picture should be resizable, the standard size should be shown to make it easy to fit
        $folderPath = 'public/assets/choice/';
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.png';
        $imageFullPath = $folderPath.$imageName;
        file_put_contents($imageFullPath, $image_base64);
        $type = 'success';
        $message = 'Choice image cropped successfully';
        return response()->json([ 'type' => $type, 'message' => $message, 'image' => $imageFullPath ]);
    }

    public function choice_delete(Request $request)
    {
        //When admin click on delete choice button, choice will be deleted
        $data = Choice::findorFail($request->id);

        $image_path1 = $data->choice_picture;

        if(file_exists($image_path1)){
            unlink($image_path1);
        }
        $product_assigneds_choices = ProductAssigned::where('choice',$request->id);
        // foreach ($product_assigneds_choices as $key => $value) {
            $product_assigneds_choices->delete();
        // }
        $data->delete();
        Session::flash('warning', "Choice deleted successfully !");
        return redirect()->back();
    }

    public function choise_update(Request $request)
    {
        //Choice update by admin

        $data = Choice::find($request->choice_id);
        //check choice name beforeupdate
        if($request->choicename == $data->choice_name) {
            $choice_name = $data->choice_name;
        } else {
            $request->validate([
                'choicename' => 'string|unique:choices,choice_name|max:255'.$request->choice_id,
            ]);
            $choice_name = $request->choicename;
        }
        //check slug before update
        if($request->choiceslug == $data->slug) {
            $slug = $data->slug;
        } else {
            $request->validate([
                'choiceslug' => 'string|unique:choices,slug|max:255'.$request->choice_id,
            ]);
            $slug = $request->choiceslug;
        }
        // check google title before update
        if($request->googletitle == $data->google_title) {
            $google_title = $data->google_title;
        } else {
            $request->validate([
                'googletitle' => 'string|unique:choices,google_title|max:255'.$request->choice_id,
            ]);
            $google_title = $request->googletitle;
        }

        if($request->choice_picture) {
            $image_path = $data->choice_picture;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $choice_picture = $request->choice_picture;
        } else {
            $choice_picture = $data->choice_picture;
        }
        $data->choice_name = $choice_name;
        $data->choice_text = $request->update_choice_text;
        $data->slug = $slug;
        $data->google_title = $google_title;
        $data->choice_picture = $choice_picture;
        $data->save();
        Session::flash('success', "Choice updated successfully !");
        return redirect()->back();
    }

    public function sort_up(Request $request)
    {
        $data = Criteria::find($request->id);
        $s = $data->criteria_serial;
        $sd = $s - 1;
        // dd($sd);
        Criteria::where('criteria_serial', $sd)->increment('criteria_serial');
        $data->decrement('criteria_serial');
        Session::flash('success', "Criteria sorted up successfully !");
        return redirect()->back();
    }

    public function sort_down(Request $request)
    {
        $data = Criteria::find($request->id);
        $s = $data->criteria_serial;
        $sd = $s + 1;
        // dd($sd);
        Criteria::where('criteria_serial', $sd)->decrement('criteria_serial');
        $data->increment('criteria_serial');
        Session::flash('success', "Criteria sorted down successfully !");
        return redirect()->back();
    }

    public function list()
    {
        $criteria = Criteria::orderby('criteria_serial', 'asc')->get();
        return view('admin.criteria.list', compact('criteria'));
    }

    public function viewchoices(Request $request)
    {
        $choices = Choice::where('criteria_id', $request->id)->get();
        return view('admin.criteria.criteria_choices', compact('choices'));
    }

}
