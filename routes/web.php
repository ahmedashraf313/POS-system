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
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@user')->name('home');

Route::get('/add_category', function () {
    return view('add_category');
});

Route::post('/add_category' ,  "HomeController@add_category" );

Route::get('/add_product', function () {
    return view('add_product');
});

Route::post('/add_product' ,  "HomeController@add_product" );

Route::get('/shop_now/{id}', function ($id) {

     return view('shop_now', ['id' => $id]);
   
});


Route::get('/settings', function () {
    return view('settings');
});

Route::post('/settings' ,  "HomeController@settings" );

Route::get('/daily_report', function () {

     return view('report', ['report' => 'day']);
   
});

Route::get('/monthly_report', function () {

     return view('report', ['report' => 'month']);
   
});

Route::get('/product_report', function () {

     return view('report', ['report' => 'product']);
   
});

Route::get('/top_products', function () {

     return view('report', ['report' => 'top_products']);
   
});

Route::get('/custom_sales', function () {

     return view('report', ['report' => 'custom_sales']);
   
});

Route::get('/all_categories', function () {

     return view('all_categories');
   
});

Route::get('/edit_category/{id}', function ($id) {

     return view('edit_category', ['id' => $id]);
   
});


Route::get('/delete_category/{id}' ,  "HomeController@delete_category" );

Route::post('/edit_category/{id}' ,  "HomeController@edit_category" );




Route::get('/all_products', function () {

     return view('all_products');
   
});

Route::get('/edit_product/{id}', function ($id) {

     return view('edit_product', ['id' => $id]);
   
});


Route::get('/delete_product/{id}' ,  "HomeController@delete_product" );

Route::post('/edit_product/{id}' ,  "HomeController@edit_product" );



Route::post('/add_customer', function (Request $request) {

	$id          = $request->input('id');

     
     

     return view('shop_now', ['id' => $id] ,['session' => 'set'] );
   
});
