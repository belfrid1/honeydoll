<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductAssigned;
use App\Models\Shop;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('admin.product.index',compact('shops'));
    }

    public function list()
    {
        $shops = Shop::all();
        $products = Product::orderby('created_at', 'desc')->get();
        return view('admin.product.list', compact('products','shops'));
    }

    public function store(Request $request)
    {
        $uploadPath = 'public/assets/product/picture/'; // to declare folder where to save picture
        // =3 pictures can be uploaded, but it should not be mandatory
        //┆Card is synchronized with this [GitHub issue](https://github.com/Ramses94450/Bigassdoll/issues/57)
        //by [Unito](https://www.unito.io/learn-more)

        if($request->productpicture1 == null ){
            $imageFullPath1 ="public/assets/product/default/default.png";
        }
        if($request->productpicture2 == null ){

            $imageFullPath2 ="public/assets/product/default/default.png";

        }
        if($request->productpicture3 == null ){

            $imageFullPath3 ="public/assets/product/default/default.png";
        }

        if($request->productpicture1){
            // get and save image cropped 1


            $image_parts = explode(";base64,", $request->productpicture1);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imageName = uniqid() . '.png';
            $imageFullPath1 = $uploadPath.$imageName;
            file_put_contents($imageFullPath1, $image_base64); // save picture into folder
        }
        if($request->productpicture2){
            // get and save image cropped 2
            $image_parts = explode(";base64,", $request->productpicture2);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imageName = uniqid() . '.png';
            $imageFullPath2 = $uploadPath.$imageName;
            file_put_contents($imageFullPath2, $image_base64);
        }
        if($request->productpicture3){
            // get and  save image cropped 3
            $image_parts = explode(";base64,", $request->productpicture3);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imageName = uniqid() . '.png';
            $imageFullPath3 = $uploadPath.$imageName;
            file_put_contents($imageFullPath3, $image_base64);

        }

        //product url is product url from add product form + affilate code rate of the shop
        $shop = Shop::find($request->shopname);
        $producturl =  $request->input('producturl').$shop->affliatecode;
        $commissionRate = $shop->commissionrate;
        $productPrice = $request->input('productprice');



        // to initialise product, and saving
        $product = new Product();
        $commissioamount = $product->getCommissionAmount($productPrice,$commissionRate);

        $product->shop_id = $request->shopname;//The shop name should be saved in the database
        $product->productname = $request->input('productname');//The product name should be saved in the database
        //Once the price will be added, this will calculate the commission amount automatically in the database, based on the shops commission rates
        $product->productprice = $request->input('productprice');//The product price should be saved in the database
        $product->previousprice = $request->input('previousproductprice');//previous product price should be saved in the database
        $product->producturl =  $producturl;//The product url  should be saved in the database
        $product->productpicture1 = $imageFullPath1; //The product picture url 1 should be saved in the database
        $product->productpicture2 = $imageFullPath2; //The product picture url 2 should be saved in the database
        $product->productpicture3 = $imageFullPath3; //The product picture url 3 should be saved in the database
        $product->productmenu = $request->input('productmenu');  //The page of product should be saved in the database
        $product->productgender = $request->input('productgender'); //The gender of product should be saved in the database
        $product->commission_amount =  $commissioamount;
        $product->save();  //The the code to save in database
        Session::flash('success', "Success product created !"); //success message returned
        return back(); //return back to page



        Session::flash('danger', "Error Please add the product pictures !");//danger message if no product image is found
        return back();

    }

    public function CropPicture(Request $request)
    {
        $folderPath = public_path('upload/');

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $imageName = uniqid() . '.png';

        $imageFullPath = $folderPath.$imageName;

        file_put_contents($imageFullPath, $image_base64);
       return  view('admin.product.index')->with('imageName', json_decode($imageName, true));

        // return response()->json(['success' => "Crop image successfully uploaded",'imageName'=>$imageName]);
    }

    public function edit(Request $request)
    {
        $shops = Shop::all();
        $product = Product::find($request->id);//When admin click on edit product button, you will be able to edit the product information
        $shopname = Shop::find($product->shop_id)->shopname;

        return view('admin.product.edit',[
            'product'=> $product,
            'shopname'=> $shopname,
            'shops'  => $shops
            ]);
    }

    public function update(Request $request)
    {
        if(Product::find($request->id)) {
            $product = Product::find($request->id);
            $uploadPath = 'public/assets/product/picture/'; // to declare folder where to save picture
            // =3 pictures can be uploaded, but it should not be mandatory
            //┆Card is synchronized with this [GitHub issue](https://github.com/Ramses94450/Bigassdoll/issues/57)
            //by [Unito](https://www.unito.io/learn-more)

            if($request->productpicture1 == null ){
                $imageFullPath1 = $product->productpicture1;
            }
            if($request->productpicture2 == null ){

                $imageFullPath2 =$product->productpicture2;

            }
            if($request->productpicture3 == null ){

                $imageFullPath3 = $product->productpicture3;
            }

            $image_path1 = $product->productpicture1;
            $image_path2 = $product->productpicture2;
            $image_path3 = $product->productpicture3;
            if($request->productpicture1){
                //delete old picture
                if($image_path1 !== 'public/assets/product/default/default.png' && file_exists($image_path1)){
                    unlink($image_path1);
                }
                // get and save image cropped 1


                $image_parts = explode(";base64,", $request->productpicture1);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $imageName = uniqid() . '.png';
                $imageFullPath1 = $uploadPath.$imageName;
                file_put_contents($imageFullPath1, $image_base64); // save picture into folder
            }
            if($request->productpicture2){
                //delete odl picture 2
                if($image_path2 !== 'public/assets/product/default/default.png' && file_exists($image_path2)){
                    unlink($image_path2);
                }
                // get and save image cropped 2
                $image_parts = explode(";base64,", $request->productpicture2);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $imageName = uniqid() . '.png';
                $imageFullPath2 = $uploadPath.$imageName;
                file_put_contents($imageFullPath2, $image_base64);
            }
            if($request->productpicture3){
                //delete old picture 3
                if($image_path3 !== 'public/assets/product/default/default.png' && file_exists($image_path3)){
                    unlink($image_path3);
                }
                // get and  save image cropped 3
                $image_parts = explode(";base64,", $request->productpicture3);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $imageName = uniqid() . '.png';
                $imageFullPath3 = $uploadPath.$imageName;
                file_put_contents($imageFullPath3, $image_base64);

            }

            $oldshopname = $product->shop_id;
            $newshopname = $request->input('shopname');
            //product url is product url from add product form + affiliate code of the shop
            $oldproducturl = $product->producturl;
            $newproducturl =  $request->input('producturl');

            if($oldshopname == $newshopname ){
                //old shop will be save in database
                $shopname = $request->input('shopname');
                if($oldproducturl !== $newproducturl ){
                    // new url; need to add affiliate code
                    $shop = Shop::find($oldshopname);
                    $producturl =  $request->input('producturl').$shop->affliatecode;
                }else{
                    $producturl = $product->producturl;
                }
            }else {
                $shop = Shop::find($request->input('shop_id'));
                $producturl =  $request->input('producturl').$shop->affliatecode;
            }

            Product::where('id', $request->id)
                ->update([
                    'shop_id'         => $request->shop_id,
                    'productname'     => $request->productname,
                    'productprice'    => $request->productprice,
                    'previousprice'   => $request->previousproductprice,
                    'producturl'      => $producturl,
                    'productpicture1' => $imageFullPath1,
                    'productpicture2' => $imageFullPath2,
                    'productpicture3' => $imageFullPath3,
                    'productmenu'     => $request->productmenu,
                    'productgender'   => $request->productgender,
                ]);//Admin can edit shop informations
            Session::flash('success', "Product updated successfully !");
        } else {
            Session::flash('danger', "Product not found !");
        }
        return redirect()->route('admin.product.list');
    }

    public function search(Request $request)
    {
        //search shopname info
    	$shops = [];

        if($request->has('q')){
            $search = $request->q;
            $shops = Shop::select("id", "shopname")
            		->where('shopname', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($shops);
    }

    public function delete ($id) {
        $product = Product::findorFail($id);
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
        $product_assigneds_choices = ProductAssigned::where('product_id',$id);
        $product_assigneds_choices->delete();

        $product->delete();
        Session::flash('success', "Success product and images deleted !");
        return back();
    }

    public function show(Request $request)
    {

        $data = Product::find($request->id);//When admin click on show product button, you will see product information
        //get shop and choice data from product object
        $shop = $data->shop;
        //put and send shop and choice table element on view with json
        $data["shop"]  = $shop;
        return response()->json($data);
    }

}
