<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\GroupProduct;
use App\Models\Criteria;
use App\Models\Product;
use App\Models\Choice;
use App\Models\Group;

class GroupController extends Controller
{
    public function index(Request $request)
    {
        if ($request->gender) {
            $gender = $request->gender;
        } else {
            $gender = 'female';
        }
        $group_ids = GroupProduct::pluck('group_id');
        $groups = Group::orderby('id', 'desc')
                        //->whereNotIn('id', $group_ids)
                        ->get();
        $d_products = Product::orderby('group_products.created_at', 'desc')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->join('group_products', 'products.id', 'group_products.product_id')
                            ->select('products.*', 'shops.shopname', 'shops.commissionrate', 'group_products.id as did')
                            ->where('group_products.status', 0)
                            ->get();
        if ($request->choice_id != null) {
            $g_products = Group::orderby('groups.id', 'asc')
                            ->join('group_products', 'groups.id', 'group_products.group_id')
                            ->join('products', 'group_products.product_id', 'products.id')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('groups.name as groupname', 'groups.id', 'shops.shopname', 'shops.commissionrate', 'products.productname', 'products.productpicture1', 'products.productprice', 'products.producturl')
                            ->where('products.choice_id', $request->choice_id)
                            ->where('group_products.status', 1)
                            ->where('group_products.commissionrate', 1)
                            ->where('products.productgender', $gender)
                            ->get()
                            ->unique();
        } else {
            $g_products = Group::orderby('groups.id', 'asc')
                            ->join('group_products', 'groups.id', 'group_products.group_id')
                            ->join('products', 'group_products.product_id', 'products.id')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('groups.name as groupname', 'groups.id', 'shops.shopname', 'shops.commissionrate', 'products.productname', 'products.productpicture1', 'products.productprice', 'products.producturl')
                            ->where('group_products.status', 1)
                            ->where('group_products.commissionrate', 1)
                            ->where('products.productgender', $gender)
                            ->get()
                            ->unique();
        }
        $group_products_ids = GroupProduct::pluck('product_id');
        if ($request->choice != null) {
            $products = Product::orderby('products.created_at', 'desc')
                        ->leftJoin('shops', 'products.shop_id', 'shops.id')
                        ->select('products.*', 'shops.shopname', 'shops.commissionrate')
                        ->whereNotIn('products.id', $group_products_ids)
                        ->where('products.productgender', $gender)
                        ->where('products.choice_id', $request->choice)
                        ->get();
        } else {
            $products = Product::orderby('products.created_at', 'desc')
                        ->leftJoin('shops', 'products.shop_id', 'shops.id')
                        ->select('products.*', 'shops.shopname', 'shops.commissionrate')
                        ->whereNotIn('products.id', $group_products_ids)
                        ->where('products.productgender', $gender)
                        ->get();
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
        return view('admin.group.index', compact('groups', 'gender', 'd_products', 'g_products', 'products', 'criteria'));
    }

    public function store(Request $request)
    {
        $data = new Group();
        $data->name = $request->group_name;
        $data->save();
        Session::flash('success', "Group created successfully !");
        return redirect()->route('admin.group.product');
    }

    public function product_add_group(Request $request)
    {
        GroupProduct::create([  'product_id' => $request->id   ]);
        Session::flash('success', "Product added !!");
        return redirect()->route('admin.group.product');
    }

    public function product_store_group(Request $request)
    {
        $data = DB::table('group_products')
                    ->join('products', 'group_products.product_id', 'products.id')
                    ->join('shops', 'products.shop_id', 'shops.id')
                    ->select('products.id', 'shops.commissionrate')
                    ->where('group_products.status', 0)
                    ->orderBy('shops.commissionrate', 'DESC')
                    ->first('products.id');
        $new = DB::table('group_products')
                    ->join('products', 'group_products.product_id', 'products.id')
                    ->select('products.*')
                    ->where('group_products.status', 0)
                    ->orderBy('products.productprice', 'ASC')
                    ->first('products.id');
        // dd($new->id);
        if ($data != null) {
            GroupProduct::where('status', 0)
                        ->update([
                            'group_id'  => $request->group,
                            'status'    => 1,
                        ]);
            GroupProduct::where('product_id', $data->id)->update([  'commissionrate' => 1   ]);
            GroupProduct::where('product_id', $new->id)->update([  'productprice' => 1   ]);
            Session::flash('success', "Product added to Group successfully !");
        } else {
            Session::flash('warning', "Product not found !");
        }
        return redirect()->route('admin.group.product');
    }

    public function details(Request $request)
    {
        if ($request->gender) {
            $gender = $request->gender;
        } else {
            $gender = 2;
        }
        $group_id = $request->id;
        $group_ids = GroupProduct::pluck('group_id');
        $groups = Group::orderby('id', 'desc')
                        //->whereNotIn('id', $group_ids)
                        ->get();
        $d_products = Product::orderby('group_products.created_at', 'desc')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->join('group_products', 'products.id', 'group_products.product_id')
                            ->select('products.*', 'shops.shopname', 'shops.commissionrate', 'group_products.id as did')
                            ->where('group_products.group_id', $group_id)
                            ->get();
        if ($request->choice_id != null) {
            $g_products = Group::orderby('groups.id', 'asc')
                            ->join('group_products', 'groups.id', 'group_products.group_id')
                            ->join('products', 'group_products.product_id', 'products.id')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('groups.name as groupname', 'groups.id', 'shops.shopname', 'shops.commissionrate', 'products.productname', 'products.productpicture1', 'products.productprice', 'products.producturl')
                            ->where('products.choice_id', $request->choice_id)
                            ->where('group_products.status', 1)
                            ->where('group_products.commissionrate', 1)
                            ->get()
                            ->unique();
        } else {
            $g_products = Group::orderby('groups.id', 'asc')
                            ->join('group_products', 'groups.id', 'group_products.group_id')
                            ->join('products', 'group_products.product_id', 'products.id')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('groups.name as groupname', 'groups.id', 'shops.shopname', 'shops.commissionrate', 'products.productname', 'products.productpicture1', 'products.productprice', 'products.producturl')
                            ->where('group_products.status', 1)
                            ->where('group_products.commissionrate', 1)
                            ->get()
                            ->unique();
        }
        $group_products_ids = GroupProduct::pluck('product_id');
        if ($gender == 1) {
            if ($request->choice != null) {
                $products = Product::orderby('products.created_at', 'desc')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('products.*', 'shops.shopname', 'shops.commissionrate')
                            ->whereNotIn('products.id', $group_products_ids)
                            ->where('products.productgender', 'male')
                            ->where('products.choice_id', $request->choice)
                            ->get();
            } else {
                $products = Product::orderby('products.created_at', 'desc')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('products.*', 'shops.shopname', 'shops.commissionrate')
                            ->whereNotIn('products.id', $group_products_ids)
                            ->where('products.productgender', 'male')
                            ->get();
            }
        } else {
            if ($request->choice != null) {
                $products = Product::orderby('products.created_at', 'desc')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('products.*', 'shops.shopname', 'shops.commissionrate')
                            ->whereNotIn('products.id', $group_products_ids)
                            ->where('products.productgender', 'female')
                            ->where('products.choice_id', $request->choice)
                            ->get();
            } else {
                $products = Product::orderby('products.created_at', 'desc')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('products.*', 'shops.shopname', 'shops.commissionrate')
                            ->whereNotIn('products.id', $group_products_ids)
                            ->where('products.productgender', 'female')
                            ->get();
            }
        }
        $criteria = Criteria::with('choices')
                            ->orderby('criteria_serial', 'ASC')
                            //->where('criterias.criteria_gender', $gender)
                            ->get();
        return view('admin.group.details', compact('groups', 'gender', 'd_products', 'g_products', 'group_id', 'products', 'criteria'));
    }

    public function remove(Request $request)
    {
        GroupProduct::find($request->id)->delete();
        Session::flash('warning', "Product removed !!");
        return redirect()->route('admin.group.product');
    }

    public function destroy(Request $request)
    {
        GroupProduct::where('status', 0)->delete();
        Session::flash('warning', "All Product removed !!");
        return redirect()->route('admin.group.product');
    }

    public function delete(Request $request)
    {
        $group = GroupProduct::where('id', $request->id)->first('group_id');
        GroupProduct::find($request->id)->delete();
        $test = DB::table('group_products')
                    ->join('products', 'group_products.product_id', 'products.id')
                    ->join('shops', 'products.shop_id', 'shops.id')
                    ->select('products.id', 'shops.commissionrate')
                    ->where('group_products.group_id', $group->group_id)
                    ->orderBy('shops.commissionrate', 'DESC')
                    ->first('products.id');
        $new = DB::table('group_products')
                    ->join('products', 'group_products.product_id', 'products.id')
                    ->select('products.*')
                    ->where('group_products.group_id', $group->group_id)
                    ->orderBy('products.productprice', 'ASC')
                    ->first('products.id');
        if ($test != null) {
            GroupProduct::where('product_id', $test->id)->update([  'commissionrate' => 1   ]);
        }
        if ($new != null) {
            GroupProduct::where('product_id', $new->id)->update([  'productprice' => 1   ]);
        }
        Session::flash('warning', "Product removed from group !!");
        return redirect()->back();
    }

    public function list()
    {
        $g_products = Group::orderby('id', 'asc')
                            ->join('group_products', 'groups.id', 'group_products.group_id')
                            ->join('products', 'group_products.product_id', 'products.id')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('products.productname','products.productprice','products.producturl', 'products.productpicture1', 'shops.shopname', 'shops.commissionrate', 'groups.id', 'groups.name')
                            ->where('group_products.status', 1)
                            ->where('group_products.commissionrate', 1)
                            ->get()
                            ->unique();
        return view('admin.group.list', compact('g_products'));
    }

    public function group_products()
    {
        $g_products = Group::orderby('groups.id', 'asc')
                            ->join('group_products', 'groups.id', 'group_products.group_id')
                            ->join('products', 'group_products.product_id', 'products.id')
                            ->join('shops', 'products.shop_id', 'shops.id')
                            ->select('groups.name as group', 'shops.shopname as shop', 'shops.commissionrate', 'products.productname', 'products.producturl', 'products.productprice', 'products.productpicture1')
                            ->where('group_products.status', 1)
                            ->get();
        return view('admin.group.group_products', compact('g_products'));
    }

    public function group_products_view(Request $request)
    {
        $data = Group::orderby('groups.id', 'asc')
                    ->join('group_products', 'groups.id', 'group_products.group_id')
                    ->join('products', 'group_products.product_id', 'products.id')
                    ->join('shops', 'products.shop_id', 'shops.id')
                    ->select('groups.name as group', 'shops.shopname as shop', 'shops.commissionrate', 'products.productname', 'products.producturl', 'products.productprice', 'products.productpicture1')
                    ->where('group_products.group_id', $request->id)
                    ->get();
        return response()->json($data);
    }


}
