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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addProducts', function () {
    return view('addProducts');
});
Route::get('/addCustomers', function () {
    return view('addCustomers');
});

Route::get('/ContactSupport', function () {
    return view('ContactSupport');
});

Route::get('/upload_productImages', function () {
    return view('upload_productImages');
});

Route::get('/searchProductName', function () {
    return view('searchProductByName');
});

Route::get('/autofill', function () {
    return view('autoFillAddress');
});

Route::post('/addProduct','productsController@insertProduct');

Route::get('/showAllProducts', 'productsController@showProducts');

Route::get('/addCustomer','customersController@insertCustomer');

Route::get('/showAllCustomers', 'customersController@showCutomers');

Route::get('/deleteProduct/{product_id}','productsController@deleteProduct');

Route::get('/updateProductInfo/{product_id}','productsController@updateProductsBefore');

Route::get('/updateProductToTable/{product_id}','productsController@updateProductsAfter');

Route::get('/serachProductName', 'productsController@searchProductByName');

Route::get('/deleteCustomer/{customer_id}','customersController@deleteCustomer');

Route::get('/updateCustomerInfo/{customer_id}','customersController@updateCustomersBefore');

Route::get('/updateToCustomerTable/{customer_id}','customersController@updateCustomersAfter');



Route::post('/uploadImages','mediaController@uploadImage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/siteRegistration','siteController@siteRegistration');