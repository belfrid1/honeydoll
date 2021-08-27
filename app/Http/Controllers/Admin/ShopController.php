<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('admin.shop.index', compact('shops'));
    }

    public function list()
    {
        $shops = Shop::all();
        return view('admin.shop.list', compact('shops'));
    }

    // The shop information should be saved in the database
    public function store(Request $request)
    {
        $request->validate([
            'shopname' => 'string|unique:shops|max:255',
        ]);
        $data                   = new Shop();
        $data->shopname         = $request->shopname;//The shop name should be saved in the database
        $data->affliatecode     = $request->affliatecode;//the affiliate code should be saved in the database
        $data->commissionrate   = $request->commissionrate;//the commission rates of each shop should be saved in the database
        $data->shoppicture      = $request->shoppicture;
        $data->shopurl          = $request->shopurl;
        $data->save();//when a client click on save button, it should save all shop information in the database
        Session::flash('success', "Shop added successfully !");
        return redirect()->back();
    }

    //Shop Image Crop here
    public function crop(Request $request)
    {
        //The picture should be resizable, the standard size should be shown to make it easy to fit
        $folderPath = 'public/assets/shop/picture/';
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.png';
        $imageFullPath = $folderPath.$imageName;
        file_put_contents($imageFullPath, $image_base64);
        $type = 'success';
        $message = 'Shop image cropped successfully';
        return response()->json([ 'type' => $type, 'message' => $message, 'image' => $imageFullPath ]);
    }

    public function edit(Request $request)
    {
        $data = Shop::find($request->id);//When admin click on edit shop button, he will be able to edit the shop information
        $shops = Shop::all();
        return view('admin.shop.edit', compact('data', 'shops'));
        //return response()->json($data);
    }

    public function update(Request $request)
    {
        $data = Shop::find($request->id);
        if($request->shoppicture) {
            $image_path1 = $data->shoppicture;
            if(file_exists($image_path1)){
                unlink($image_path1);
            }
            $shoppicture = $request->shoppicture;
        } else {
            $shoppicture = $data->shoppicture;
        }
        if($request->shopname == $data->shopname) {
            $shopname = $data->shopname;
        } else {
            $request->validate([
                'shopname' => 'string|unique:shops|max:255'.$request->id,
            ]);
            $shopname = $request->shopname;
        }
        //shop picture should be saved in the database
        if($data != null) {
            Shop::where('id', $request->id)
                ->update([
                    'shopname'          => $shopname,
                    'affliatecode'      => $request->affliatecode,
                    'commissionrate'    => $request->commissionrate,
                    'shoppicture'       => $shoppicture,
                    'shopurl'           => $request->shopurl,
                ]);//Admin can edit shop informations
            Session::flash('success', "Shop updated successfully !");
        } else {
            Session::flash('danger', "Shop not found !");
        }
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        //When admin click on delete shop button, shop will be deleted
        $shop = Shop::findorFail($request->id);
        $products = Product::where('shop_id',$request->id)->get();
        foreach ($products as $key => $value) {
            $product = Product::findorFail($value->id);
            if($product){
                $image_path1 = $product->productpicture1;
                $image_path2 = $product->productpicture2;
                $image_path3 = $product->productpicture3;

                if($image_path1 !== 'public/assets/product/default/default.png' && file_exists($image_path1)){
                    unlink($image_path1);
                }
                if($image_path2 !== 'public/assets/product/default/default.png' && file_exists($image_path2)){
                    unlink($image_path2);
                }
                if($image_path3 !== 'public/assets/product/default/default.png' && file_exists($image_path3)){
                    unlink($image_path3);
                }

                // dd(Storage::delete($storage_path));
                // Storage::delete($filename);

                $product->delete();
            }
        }


        $image_path1 = $shop->shoppicture;

        if(file_exists($image_path1)){
            unlink($image_path1);
        }
        $shop->delete();
        Session::flash('warning', "Shop deleted successfully !");
        return redirect()->back();
    }

    public function search(Request $request)
    {
    	$shops = [];

        if($request->has('q')){
            $search = $request->q;
            $shops = Shop::select("id", "shopname")
            		->where('shopname', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($shops);
    }


}
