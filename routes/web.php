<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('front.index');
//     // return \App\Models\Product::find(1)->productImages;

// });
Route::get('/', 'App\Http\Controllers\Front\HomeController@index')->name("front.index");
Route::get('/home', 'App\Http\Controllers\Front\HomeController@index')->name("front.index");

Route::get('/about', 'App\Http\Controllers\Front\HomeController@about')->name("front.home.about");
Route::get('/product', 'App\Http\Controllers\Front\ProductController@index')->name("front.product.index");
Route::get('/service', 'App\Http\Controllers\Front\HomeController@service')->name("front.home.service");
Route::get('/cart', 'App\Http\Controllers\Front\CartController@cart')->name("front.cart.cart");
//search
Route::get('/search','App\Http\Controllers\Front\ProductController@search')->name("front.product.search");



Route::middleware('admin')->group(function(){



//admin
Route::get('/admin',
'App\Http\Controllers\Admin\AdminProductController@index')
->name("dashboard.product.index"); 
Route::post("/dashboard/products/store",
"App\Http\Controllers\Admin\AdminProductController@store")
->name("dashboard.product.store");
Route::get('/admin/create','App\Http\Controllers\Admin\AdminProductController@create')->name("dashboard.product.create");

Route::delete('/admin/products/{id}/delete'
,
'App\Http\Controllers\Admin\AdminProductController@delete')
->name("dashboard.product.delete"); 

Route::get('/admin/products/{id}/edit',
'App\Http\Controllers\Admin\AdminProductController@edit')
->name("dashboard.product.edit");
Route::put('/admin/products/{id}/update',
'App\Http\Controllers\Admin\AdminProductController@update')
->name("dashboard.product.update");
//brand
Route::get('/admin/brand',
'App\Http\Controllers\Admin\AdminBrandController@index')
->name("dashboard.brand.index"); 
Route::post("/dashboard/brand/store",
"App\Http\Controllers\Admin\AdminBrandController@store")
->name("dashboard.brand.store");
Route::get('/admin/Brand/create','App\Http\Controllers\Admin\AdminBrandController@create')->name("dashboard.brand.create");
Route::delete('/admin/brands/{id}/delete'
,
'App\Http\Controllers\Admin\AdminBrandController@delete')
->name("dashboard.brand.delete"); 
Route::get('/admin/brands/{id}/edit',
'App\Http\Controllers\Admin\AdminBrandController@edit')
->name("dashboard.brand.edit");
Route::put('/admin/brands/{id}/update',
'App\Http\Controllers\Admin\AdminBrandController@update')
->name("dashboard.brand.update");

//catarogy
Route::get('/admin/catarogy',
'App\Http\Controllers\Admin\AdminCatarogyController@index')
->name("dashboard.catarogy.index"); 
Route::post("/dashboard/catarogy/store",
"App\Http\Controllers\Admin\AdminCatarogyController@store")
->name("dashboard.catarogy.store");
Route::get('/admin/catarogy/create','App\Http\Controllers\Admin\AdminCatarogyController@create')->name("dashboard.catarogy.create");
Route::delete('/admin/catarogy/{id}/delete'
,
'App\Http\Controllers\Admin\AdminCatarogyController@delete')
->name("dashboard.catarogy.delete"); 
Route::get('/admin/catarogy/{id}/edit',
'App\Http\Controllers\Admin\AdminCatarogyController@edit')
->name("dashboard.catarogy.edit");
Route::put('/admin/catarogy/{id}/update',
'App\Http\Controllers\Admin\AdminCatarogyController@update')
->name("dashboard.catarogy.update");

//image
Route::get('/admin/image',
'App\Http\Controllers\Admin\AdminImageController@index')
->name("dashboard.image.index"); 
Route::post("/admin/product_image/store",
"App\Http\Controllers\Admin\AdminImageController@store")
->name("dashboard.image.store");
Route::get('/admin/image/create','App\Http\Controllers\Admin\AdminImageController@create')->name("dashboard.image.create");
Route::delete('/admin/image/{id}/delete'
,
'App\Http\Controllers\Admin\AdminImageController@delete')
->name("dashboard.image.delete"); 
Route::get('/admin/image/{id}/edit',
'App\Http\Controllers\Admin\AdminImageController@edit')
->name("dashboard.image.edit");
Route::put('/admin/image/{id}/update',
'App\Http\Controllers\Admin\AdminImageController@update')
->name("dashboard.image.update");


});


Auth::routes();
Route::get('/cart','App\Http\Controllers\CartController@index')->name("front.cart.cart");
Route::get('/cart/delete','App\Http\Controllers\CartController@delete')->name("front.cart.cart.delete");
Route::post('/cart/add/{id}','App\Http\Controllers\CartController@add')->name("front.cart.cart.add");

Route::get('/checkout','App\Http\Controllers\CartController@checkout')->name("front.checkout");
Route::post("/checkoutUapdate",
"App\Http\Controllers\CartController@chekoutUpdate")->name("front.checkout.update");

Route::middleware('auth')->group(function(){
    Route::get('/cart/purchase','App\Http\Controllers\CartController@purchase')->name("front.cart.purchase");
});



