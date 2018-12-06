
<?php

use Illuminate\Support\Facades\Mail;

Route::get('/','ProductController@index');

Route::get('upload',function ()
{
	return view('welcome');
});

Route::post('upload/store','UploadImagesController@imageStore');

Route::get('mail',function ()
{
	Mail::to('thunguyen.hvtc5897@gmail.com')->send(new \App\Mail\Mail(1));
});

Route::get('product/quickview','ProductController@quickView');

Route::get('product/{slug}','ProductController@detail');

Route::post('product/add2cart','ProductController@add2cart');

Route::get('cart', 'ProductController@cart');

Route::get('cart/add','ProductController@add');

Route::get('cart/checkout','ProductController@checkout');

Route::post('cart/checkout/billing','ProductController@billing');

Route::prefix('admin')->group(function(){

	Route::get('/','AdminController@index');
//quản lý bán hàng
	Route::get('sales','AdminSaleController@index');

	Route::get('sales/getlistcustomers','AdminSaleController@getListCustomers');

	Route::get('sales/{id}','AdminSaleController@selling')->name('selling');

	Route::get('sales/selling/getlistproducts','AdminSaleController@getListSaleProducts');

	Route::get('sales/add2cart/{id}','AdminSaleController@add2cart')->name('add2cart');

	Route::get('sales/{id}/addorminus','AdminSaleController@addOrMinus');

	Route::get('sales/{id}/payment','AdminSaleController@payment')->name('payment');

	Route::get('sales/{id}/destroy','AdminSaleController@payment')->name('destroy');

	Route::get('sales/{id}/billdetail/{code_bill}','AdminSaleController@billDetai')->name('billdetail');
// hết quản lý bán hàng
// quản lý sản phẩm

	Route::get('products','AdminProductController@index');

	Route::get('products/getlistproducts','AdminProductController@getListProducts');

	Route::get('products/show/{id}','AdminProductController@show')->name('products.show');

	Route::delete('products/{id}/edit/deleteimage','AdminProductController@deleteImage');

	Route::put('products/{id}','AdminProductController@update');

	Route::get('products/{id}/edit','AdminProductController@edit')->name('products.edit');

	Route::post('products/{id}/edit/image/upload','AdminProductController@upload');

	Route::post('products/{id}/edit/image/delete','UploadImagesController@imageDestroy');

	Route::get('products/delete/{id}','AdminProductController@delete')->name('products.delete');
//  hết quản lý sản phẩm
	Route::get('customers','AdminController@list');

	Route::get('bills','AdminController@list');
});

