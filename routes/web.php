<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $name='ahmed';
    $departments=[
        '1'=>'Tuchnical',
        '2'=>'Finacial',
        '3'=>'Sales',
    ];
    // return view('about', ['name' => $name]);
    // return view('about')->with('name',$name);
    return view('about',compact('name','departments'));

});

Route::post('/about',function(){
    $name =$_POST['name'];
    $departments=[
        '1'=>'Tuchnical',
        '2'=>'Finacial',
        '3'=>'Sales',
    ];
    return view('about',compact('name','departments'));
});
