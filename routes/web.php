<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('adminloginadmin', 'Auth\LoginController@showLoginForm');
// Route::redirect('/login', '/sex-doll', 301);
// Route::redirect('/register', '/sex-doll', 301);

// Route::get('adminregisteradmin', 'Auth\RegisterController@showRegistrationForm');
/////////////////////////////////// Frontend Route
//Route::redirect('/', '/sex-doll', 301);

//Route::get('/sex-doll', 'FrontController@index')->name('front.home');
Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/sex-doll/accessories', 'FrontController@accessories')->name('front.accessories');
Route::get('/shops', [FrontController::class, 'shops'])->name('front.shops');
Route::get('/sex-doll/toys', 'FrontController@toys')->name('front.toys');
Route::get('/sex-doll/underwears', 'FrontController@underwears')->name('front.underwears');
Route::get('/front/choicecheckeds', 'FrontController@choiceCheckeds')->name('front.choiceCheckeds');

/////////////////////////////////// codeSaver routes start
Route::get('/codesaver/index', 'CodesaverController@pageIndex')->name('codesaver.index');
Route::post('/codesaver/pagesaver', 'CodesaverController@pageSave')->name('codesaver.page.save');
Route::get('/codesaver/page/{page}/show', 'CodesaverController@pageShow')->name('codesaver.page.show');
Route::post('/codesaver/field/{id}/update', 'CodesaverController@fieldEdit')->name('codesaver.field.edit');
Route::post('/codesaver/field/{id}/save', 'CodesaverController@fieldSave')->name('codesaver.field.save');


/////////////////////////////////// Home Route
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['adminMiddleware'])->group(function () {
    ///////////////////// Admin Home
    Route::get('/admin-dashboard', 'Admin\AdminController@index')->name('admin.home');

    ///////////////////// Admin Shop
    Route::get('/admin-shop', 'Admin\ShopController@index')->name('admin.shop');
    Route::get('/admin-shop-list', 'Admin\ShopController@list')->name('admin.shop.list');
    Route::get('/admin-shop-lists', 'Admin\ShopController@list')->name('admin.shop.list');
    Route::post('/admin-shop-store', 'Admin\ShopController@store')->name('admin.shop.store');
    Route::get('/admin-shop-edit', 'Admin\ShopController@edit')->name('admin.shop.edit');
    Route::post('/admin-shop-update', 'Admin\ShopController@update')->name('admin.shop.update');
    Route::get('/admin-shop-delete', 'Admin\ShopController@delete')->name('admin.shop.delete');
    Route::post('/admin-shop-crop-picture', 'Admin\ShopController@crop')->name('admin.shop.crop.picture');

    ///////////////////// Admin all user export
    Route::get('/admin-user-export', 'Admin\AdminController@user_export')->name('admin.user.export');


    ///////////////////// Admin Criteria
    Route::get('/admin-criteria', 'Admin\CriteriaController@index')->name('admin.criteria');
    Route::get('/admin-criteria-list', 'Admin\CriteriaController@list')->name('admin.criteria.list');
    Route::get('/admin-criteria-viewchoices', 'Admin\CriteriaController@viewchoices')->name('admin.criteria.viewchoices');
    Route::post('/admin-criteria-store', 'Admin\CriteriaController@store')->name('admin.criteria.store');
    Route::get('/admin-criteria-edit', 'Admin\CriteriaController@edit')->name('admin.criteria.edit');
    Route::get('/admin-criteria-choice-edit', 'Admin\CriteriaController@criteria_choice_edit')->name('admin.criteria.choice.edit');
    Route::post('/admin-criteria-update', 'Admin\CriteriaController@update')->name('admin.criteria.update');
    Route::get('/admin-criteria-sort-up', 'Admin\CriteriaController@sort_up')->name('admin.criteria.sort.up');
    Route::get('/admin-criteria-sort-down', 'Admin\CriteriaController@sort_down')->name('admin.criteria.sort.down');
    Route::get('/admin-criteria-delete', 'Admin\CriteriaController@delete')->name('admin.criteria.delete');

    ///////////////////// Assign Criteria
    Route::get('/admin-assign-criteria', 'Admin\AssignController@index')->name('admin.assign.criteria');
    Route::get('admin-criteria-list', 'Admin\CriteriaController@list')->name('admin.criteria.list');
    Route::get('/admin-assign-criteria-assign', 'Admin\AssignController@assign')->name('admin.criteria.assign');
    Route::get('/admin-assign-criteria-select', 'Admin\AssignController@select_criteria')->name('admin.criteria.select');
    // Route::get('/admin-product-assigned', 'Admin\AssignController@product_assigned')->name('admin.product.assigned');


    ///////////////////// Admin Choice
    Route::post('/admin-choice-store', 'Admin\CriteriaController@choise_store')->name('admin.choice.store');
    Route::post('/admin-choice-update', 'Admin\CriteriaController@choise_update')->name('admin.choice.update');
    Route::get('/admin-choice-showeditmodal', 'Admin\CriteriaController@showeditmodal')->name('admin.choice.showeditmodal');
    Route::post('/admin-edit-choice', 'Admin\CriteriaController@editChoice')->name('admin.edit.Choice');
    Route::post('/admin-edit-crop-picture', 'Admin\CriteriaController@choise_crop')->name('admin.choice.crop.picture');
    Route::get('/admin-choice-delete', 'Admin\CriteriaController@choice_delete')->name('admin.choice.delete');

    ///////////////////// Admin Product
    Route::get('/admin-product', 'Admin\ProductController@index')->name('admin.product');
    ///Route::
    Route::post('/admin-product/store', 'Admin\ProductController@store')->name('admin.product.store');
    Route::get('/admin-product-list', 'Admin\ProductController@list')->name('admin.product.list');
    Route::get('/admin-product-edit/{id}', 'Admin\ProductController@edit')->name('admin.product.edit'); // update product
    Route::post('/admin-product-update', 'Admin\ProductController@update')->name('admin.product.update'); // update product
    Route::post('/crop-picture-crop', 'Admin\ProductController@CropPicture')->name('admin.picture.crop'); //to crop product
    Route::get('/ajax-autocomplete-search', 'Admin\ProductController@search')->name('admin.shop.search');// Shop name dropdown route in add new product form
    Route::get('/admin-product-show', 'Admin\ProductController@show')->name('admin.product.show');// to show  product
    Route::get('/admin-product-delete/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');// to delete one product


    ///////////////////// Admin change background route
    Route::get('/change-background', 'Admin\AdminController@changebackground')->name('admin.changebackground');
    Route::post('/file-upload', 'Admin\AdminController@storebackground')->name('admin.background.upload');//route store background
    Route::get('/removebackground/{id}', 'Admin\AdminController@removebackground')->name('admin.background.remove');//route to remove background

    ///////////////////// Admin Group Product
    Route::get('/admin-group-list', 'Admin\GroupController@list')->name('admin.group.list');
    Route::get('/admin-group-products', 'Admin\GroupController@group_products')->name('admin.group.products');
    Route::get('/admin-group-products-view', 'Admin\GroupController@group_products_view')->name('admin.group.products.view');
    Route::get('/admin-group-product', 'Admin\GroupController@index')->name('admin.group.product');
    Route::post('/admin-group-store', 'Admin\GroupController@store')->name('admin.group.store');
    Route::get('/admin-group-product-add', 'Admin\GroupController@product_add_group')->name('admin.group.product.add');
    Route::post('/admin-group-product-store', 'Admin\GroupController@product_store_group')->name('admin.group.product.store');
    Route::get('/admin-group-product-details', 'Admin\GroupController@details')->name('admin.group.product.details');
    Route::get('/admin-group-product-remove', 'Admin\GroupController@remove')->name('admin.group.product.remove');
    Route::get('/admin-group-product-destroy', 'Admin\GroupController@destroy')->name('admin.group.product.destroy');
    Route::get('/admin-group-product-delete', 'Admin\GroupController@delete')->name('admin.group.product.delete');
    ///////////////////// Admin Home
    Route::get('/admin-dashboard', 'Admin\AdminController@index')->name('admin.home');
});


/////////// Front route
Route::get('product/{id}', 'FrontController@product')->name('front.product'); // product page route

//////////////////// Affiliate Products Comparator
Route::get('/affiliate-products-comparator', 'FrontController@affiliate_products_comparator')->name('affiliate.products.comparator');


///////////////////// Choice Page
Route::get('/sex-doll/choice-view', 'FrontController@choice_view')->name('choice.view');


///////////////////// Admin all user export
Route::get('/admin-user-export', 'Admin\AdminController@user_export')->name('admin.user.export');

/////////// Front route
Route::get('product/{id}', 'FrontController@product')->name('front.product'); // product page route

///////////////////// Choice Page
// Route::get('/{choice}', 'FrontController@choice')->name('choice');

//////////////////// Products Comparator
Route::get('products/comparator', 'FrontController@affiliate_products_comparator')->name('products.comparator');
Route::get('choice/sex-doll/{slug}', 'FrontController@choice')->name('choice');

//////////wishlist route
Route::resource('/wishlist', 'Admin\WishlistController')->except(['create', 'edit', 'show', 'update'])->parameters([
    'products' => 'product_id'
]);

