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

Route::get('/translate', function () {
    return view('translate');
});
Route::post('/translate', function (Illuminate\Http\Request $request) {
    $english = $request->input('english');
    $arrenglish = ["Hello"=>"Xin chào","Ok"=>"Vâng", "Bye"=>"tạm biệt"]; 
    $flag = false;
    foreach ($arrenglish as $key => $value) {
    	  if($key == $english){
    	  	$flag= true;
    	  	echo "nghĩa của từ :".$key."</br>"."là:".$value;

    	  	return view('translate');

    	  }
    	      		# code...
    	}
    	if($flag== false){
    	  	echo "Không tìm thấy từ cần tìm";
    	  	return view('translate');
    	  }
	
    // for($i = 0; $i < count($arrenglish); $i++){
    //     if($english === $arrenglish[$i]){
    //         $vietnam = $arrvietnam[$i];
    //         return view('display_translate', compact(['english'],['vietnam']));
    //     }else{
    //         $vietnam = "Chưa có từ này";
    //         return view('display_translate', compact(['english'],['vietnam']));
    //     }
    // }
});