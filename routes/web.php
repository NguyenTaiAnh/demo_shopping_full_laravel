<?php

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

//Route::get('/', function () {
//    return view('Page.master');
//});
Route::get('/', 'HomeController@index')->name('index');


Route::get('getshop', 'ShopController@getshop')->name('shop');

Route::get('getblog', 'ShopController@getblog')->name('blog');

Route::get('geterror', 'ShopController@geterror')->name('error');
Route::get('getabout', 'ShopController@getabout')->name('about');

Route::get('getcontact', 'ShopController@getcontact')->name('contact');

Route::get('getsign', 'ShopController@getsign')->name('sign');

Route::get('getwishlist', 'ShopController@getwishlist')->name('wishlist');
Route::get('getaccount', 'ShopController@getaccount')->name('account');

Route::get('vieworder/{id}', 'ShopController@getViewOrder')->name('vieworder');

Route::post('search','ShopController@search')->name('search');
//---------------------check out ------------------------------
Route::get('checkout', 'ShopController@getcheckout')->name('checkout');
Route::post('checkout','ShopController@getchekout')->name('checkout');
Route::post('placeorder', 'ShopController@placeOrder')->name('placeorder');
//--------------------------------------------------------------


Route::get('sign_product/{id}','ShopController@getsproduct')->name('sign_product');



//--------------------------cart-----------------------------------------
Route::get('getcart', 'CartController@getcart')->name('cart');
Route::get('add-to-cart/{id}','CartController@getAdd')->name('addcart');
Route::patch('update-cart', 'CartController@update')->name('updatecart');
Route::delete('remove-from-cart', 'CartController@remove')->name('remove');
//-----------------------------------------------------------------------------




Route::get('getadmin', function () {
    return view('layouts.admin');
});

//category

Route::group(['prefix' => 'category'], function () {
    Route::get('list', 'CategoryController@getlist')->name('list');

    Route::get('add', 'CategoryController@getadd')->name('add');//create
    Route::post('update', 'CategoryController@postupdate')->name('update');//store

    Route::get('edit/{id}', 'CategoryController@getedit')->name('edit');
    Route::post('edit/{id}', 'CategoryController@postedit')->name('postedit');//update

    Route::post('delete/{id}', 'CategoryController@getdelete')->name('delete');
});

//product
Route::resource('products','ProductController');
//discout
Route::resource('discount','DiscountController');
//shipping
Route::resource('shipping','ShippingController');
//Pay type
Route::resource('pay_type','Pay_typeController');
//Order status
Route::resource('orderstatus','OrderStatusController');


Auth::routes();
//php artisan make:controller OrderStatusController --resource --model=Order_status


//admin
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/admin','HomeController@admin')->name('admin');

Route::get('profile', function () {
    return view('admin.profile');
})->name('profile');

Route::get('admin/profile', function () {
//
})->middleware('admin');
