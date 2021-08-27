<?php

namespace App\Http\Controllers\Admin;


use App\Models\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Exports\UserExport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     *  admin change background
     * */
    public function changebackground()
    {
        $backgrounds = Background::all();
        return view('admin.changebackground')->with('backgrounds', $backgrounds);
    }
    public function storebackground (Request $request) {

        if ($request->hasFile('background')) {
            //  Let's do everything here
            if ($request->file('background')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'background' => 'mimes:jpeg,png|max:1014',
                ]);

                $extension = $request->background->extension();
                $request->background->storeAs('/public/background',$validated['name'].".".$extension);
                $url = Storage::url('background/'.$validated['name'].".".$extension);
                $file = Background::create([
                   'name' => $validated['name'],
                    'url' => $url,
                ]);
                Session::flash('success', "Success background uploaded!");
                return back();
            }
        }
        abort(500, 'Could not upload background :(');
    }
    public function removebackground ($id) {
        $background = Background::findorFail($id);
        $public_path = public_path($background->url);
        if(file_exists($public_path)){
            unlink($public_path);
        }
        $background->delete();
        Session::flash('success', "Success background deleted !");
        return back();
    }

    // Admin can download all registers user informations in Excel sheet
    public function user_export()
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }

}
