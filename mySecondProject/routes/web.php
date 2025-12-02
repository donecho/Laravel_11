<?php

use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//     return "Hello World";
    // echo "Hello Laravel";
    // $arr =['one','two','three',[1,2,3]];
    // logger($arr);
    // print_r($arr);
    // dd($arr);
// });

//https://localhost:8000/home?name=zin%address=yangon
//http://localhost:8000/home/zin/yangon

Route::redirect('/','about');

Route::get('home/{name}/{address?}',function($userName,$address = 'NoWhere'){
    dd("home Page, $userName ||| $address");
});

Route::get('about',function(){
    echo "About Page";
});

Route::get('add/{firstNum}/{secNum}',function($num1,$num2){
    return $num1+$num2;
});



