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
Route::get('/greeting', function () {
   echo "hello";
});



Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});
Route::get('/login', function() {
      return view('/login');
});
Route::get('/product_discount', function () {
    return view('product_discount');
});
Route::post('/product_discount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->input('description');
    $productPrice = $request->input('price');
    $discountPercent = $request->input('discount_percent') ;
    $discountAmount = $productPrice * $discountPercent * 0.1 / 100;
    $discountPrice = $productPrice - $discountAmount;
    return view('display_discount', compact(['discountPrice', 'discountAmount', 'productDescription', 'productPrice', 'discountPercent']));
});