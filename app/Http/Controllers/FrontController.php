<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Criteria;
use App\Models\Product;
use App\Models\Choice;
use App\Models\ProductAssigned;
use App\Models\Shop;
use Illuminate\Support\Arr;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

       

        if ($request->gender) {
            $gender = $request->gender;
        } else {
            $gender = 2;
        }
        //retrive backgounds to display in front
        $backgrounds = Background::orderBy('id', 'desc')->take(3)->get();
        //retrive products to display in front
        // we rettrive here all product that will be display in front main page
        // $products = Product::where('productmenu','menu_mainproduct')->take(3)->get();
        $criteria = Criteria::with('choices')
                            ->orderby('criteria_serial', 'ASC')
                            ->get();
        $products = Product::where('productmenu','menu_mainproduct')
                            ->orderBy('id', 'desc')
                            ->get()
                            ;
        $females = Product::where('productmenu','menu_mainproduct')
        ->where('productgender','female')
        ->orderBy('id', 'desc')
        ->paginate(9);
        $males = Product::where('productmenu','menu_mainproduct')
        ->where('productgender','male')
        ->orderBy('id', 'desc')
        ->get();

        return view('front.landingpage', compact(
            'gender',
            'backgrounds',
            'products',
            'criteria',
            'females',
            'males'));
    }

    public function accessories()
    {
         //retrive backgounds to display in front
         $backgrounds = Background::orderBy('id', 'desc')->take(3)->get();
         //retrive products to display in front
         // we rettrive here all product that will be display in front main page
         // $products = Product::where('productmenu','menu_mainproduct')->take(3)->get();
         $products = Product::where('productmenu','menu_accessory')->orderBy('id', 'desc')->paginate(45);
        return view('front.accessories',['backgrounds'=> $backgrounds, 'products'=> $products]);
    }

    public function toys()
    {
         //retrive backgounds to display in front
         $backgrounds = Background::orderBy('id', 'desc')->take(3)->get();
         //retrive products to display in front
         // we rettrive here all product that will be display in front main page
         // $products = Product::where('productmenu','menu_mainproduct')->take(3)->get();
         $products = Product::where('productmenu','menu_toys')->orderBy('id', 'desc')->paginate(45);
        return view('front.toys',['backgrounds'=> $backgrounds, 'products'=> $products]);
    }

    public function underwears()
    {
         //retrive backgounds to display in front
         $backgrounds = Background::orderBy('id', 'desc')->take(3)->get();
         //retrive products to display in front
         // we rettrive here all product that will be display in front main page
         // $products = Product::where('productmenu','menu_mainproduct')->take(3)->get();
         $products = Product::where('productmenu','menu_underwear')->orderBy('id', 'desc')->paginate(45);
        return view('front.underwears',['backgrounds'=> $backgrounds, 'products'=> $products]);
    }

    public function shops()
    {
        //The picture should be fetched in shop menu in front end
        $shops = Shop::all();//put 4 pictures per line. The picture should be fetched from add a new shop menu in admin
        return view('front.shops', compact('shops'));
    }

    public function product($productId)
    {
        // to display one product to product page
        $product = Product::find($productId);

        return view('front.product', ['product'=>$product]);
    }

    public function choice($slug, Request $request)
    {
        $data = Choice::where('choices.slug', $slug)
                        ->join('criterias', 'choices.criteria_id', 'criterias.id')
                        ->select('choices.*', 'criterias.criteria_gender')
                        ->first();


        $criteria = Criteria::with('choices')
                            ->orderby('criteria_serial', 'ASC')
                            ->get();
        // get all product not related to the choice clicked
        $productsNoChoise  = Product::where('productmenu','menu_mainproduct')
        ->orderBy('id', 'desc')
        ->limit(96)
        ->get();



        $productsNoChoise_array = [];
        foreach ($productsNoChoise as $key => $value) {
            $productsNoChoise_array[]=$value ;
        }
        if($data){
            $choiseId = $data->id;
            $productsChoisesAssigned  = ProductAssigned::where('choice',$data->id)->get();
            $productsChoises = [];
            // get product with product id retrive in product assigned table
            foreach ($productsChoisesAssigned as $value) {
                $products_array = Product::where('id',$value->product_id)->get()->first();
                $productsChoises[] = $products_array;
            }

            // to merge array related to the choice and other products
            $products =array_unique(array_merge($productsChoises,$productsNoChoise_array), SORT_REGULAR);

        }else {
            // data doesn't exist
            $products = $productsNoChoise;
            $choiseId = '';
        }

        return view('front.choice', compact('data', 'criteria', 'products','slug','choiseId'));
    }

    public function choice_view(Request $request)
    {
        $products = Product::where('productmenu','menu_mainproduct')
                        ->orderBy('id', 'desc')
                        ->where('choice_id', $request->id)
                        ->get();
        return view('front.product_list', compact('products'));
    }

    public function affiliate_products_comparator(Request $request)
    {
        if ($request->gender) {
            $gender = $request->gender;
        } else {
            $gender = 'female';
        }
        if ($request->gender != 'female') {
            $criteria = Criteria::with('choices')
                            ->orderby('criteria_serial', 'ASC')
                            ->where('criterias.criteria_gender', 1)
                            ->get();
        } else {
            $criteria = Criteria::with('choices')
                            ->orderby('criteria_serial', 'ASC')
                            ->where('criterias.criteria_gender', 2)
                            ->get();
        }
        $products = Product::join('group_products', 'products.id', 'group_products.product_id')
                        ->select('products.*')
                        ->where('group_products.productprice', '=', 1)
                        ->orderBy('products.id', 'desc')
                        ->where('products.productgender', $gender)
                        ->get();
        return view('front.affiliate_products_comparator', compact('products', 'gender', 'criteria'));
    }

    public function choiceCheckeds(Request $request)
    {
        $arrayChoiceCheckeds =  $request->choiceCheckeds;

       if($arrayChoiceCheckeds == null){
            //all product of main product page with gender
            if( $request->gender == "male"){
            $products = Product::where('productmenu','menu_mainproduct')
            ->where('productgender','male')
            ->orderBy('id', 'desc')
            ->paginate(9);
            }elseif( $request->gender == "female"){
            $products = Product::where('productmenu','menu_mainproduct')
            ->where('productgender','female')
            ->orderBy('id', 'desc')
            ->paginate(9);
            }
            $html = view('front.choiceChecked', ['products' => $products])->render();
            return response()->json($html);
       }else{

            $productsCriteria = [];
            foreach ($arrayChoiceCheckeds as $ChoiceCheckedId ) {
                $productCriteria = ProductAssigned::where('choice', intval($ChoiceCheckedId))
                ->orderBy('id', 'desc')
                ->get();
                $productsCriteria[] = $productCriteria;
            }
            $products = [];
            $productsId = [];

            foreach ($productsCriteria as $prdCriteria) {
                foreach ($prdCriteria as $key) {
                    $prdProduct = Product::where('id',$key->product_id)
                    ->get()
                    ->first();
                    // push in products all product checked
                    $products[] = $prdProduct;
                    if($prdProduct){
                        $productsId[] = $prdProduct->id;
                    }
                }
            }

            //get all product of main product page with gender related to choice checked
            if( $request->gender == "male"){
                $allproducts = Product::where('productmenu','menu_mainproduct')
                ->where('productgender','male')
                ->orderBy('id', 'desc')
                ->get();
            }elseif( $request->gender == "female"){
                $allproducts = Product::where('productmenu','menu_mainproduct')
                ->where('productgender','female')
                ->orderBy('id', 'desc')
                ->get();
            }


            $allProductsId = [];
            foreach ($allproducts as $key ) {
                $allProductsId[] = $key->id;
            }
            $productsIdToSort   = array_count_values ( $productsId );
            arsort($productsIdToSort);
            $productsIdSort = [];
            foreach ($productsIdToSort as $key => $value) {
                $productsIdSort[] = $key;
            }
            // dd($arrayChoiceCheckeds,$productsIdToSort,$productsIdSort,$allProductsId);


            // define status priority here
            $productsIdmerged =array_unique(array_merge($productsIdSort,$allProductsId), SORT_REGULAR);

            $products =  $allproducts->sortBy(function($order) use($productsIdmerged){
            return array_search($order['id'], $productsIdmerged);
            })->values()->all();

            //send 24 products in front
            $productToFront = array_slice($products, 0, 9);
            $html = view('front.choiceChecked', ['products' => $productToFront])->render();
            return response()->json($html);
       }
    }
}
