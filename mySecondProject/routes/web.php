<?php

use Illuminate\Support\Facades\Route;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

/**Route Start */

//GET POST

///POST -> PUT PATCH DELETE OPTIONS

// Route::redirect('/', 'home', 301);

// Route::get('home',function(){
//     echo "This is / home Page";
// });

// Route::get('customer/service',function(){
//     echo "This is customer service Page";
// });

// Route::get('test',function(){
//     $arr = ['1','2','3',['a','b','c','d']];
//     logger($arr);
//     // dd($arr[3]);
// });

// <a href="home.php?id=12">Home Page</a>

//home.php?id=10&address=yangon

//$_GET(['id']) %_GET(['address'])

//http://localhost:8000/login/zpt@gmail.com/123

//http://localhost:8000/login

// Route::get('login/{name?}',function($name = "Default Value"){
    // return response($name) //body //header
    //     ->header('content-type','application/json')
    //     ->header('secretKey','123')
    //     ->header('secretKeyTwo','123');

    // return response($name) //body //header
    //     ->withHeaders([
    //         "content-type"=>'application/json',
    //          "content-type"=>'application/json',
    //     ]);

        //return response()->json($name,200,$headers);
// });

// Route::get('redirect',function(){
    // return redirect("userName/zin/22");
    // return redirect()->route('userName',22);
    // return to_route('userName',['name'=>'Thant','age'=>20]);

    //return redirect()->away('www.youtube.com');
    // return response()->download('../public/image/anime.png');
    // return back();
// });

//URI
// Route::get('userName/{name}/{age}',function($name,$age){
//     return "My name is ".$name . ", I'm ". $age ." year old.";
// })->name('userName');


/**View Start */

// Route::view('/homePage', 'home');
Route::get('homePage', function () {
    $data ="<h1>Server Data</h1>";
    $message =" <h1>Sever Message</h1>";
    // return view('home')->with('message','this is message from server site.');
    // return view('home')->with(['sData'=>$data,'sMessage'=>$message]);
    // return view('home',compact('data','message')); /recommand
    // return view('home',['data'=>$data, 'message'=>$message]);

    //view check
    // return view()->exists('about') ?"have":'not have';
    return view('home');

});

Route::get('aboutPage',function(){
    return view ('about');
});

Route::get('/user/register/page',function(){
    return view('customer.register');
})->name('registerPage');

Route::get('/listPage',function(){
    return view('admin.user.list');
});

Route::get('page/one/{name}/data',function($name){
    dd($name);
});

Route::get('page/two/{name}/data',function($name){
    dd($name);
})->name('pageTwo');

