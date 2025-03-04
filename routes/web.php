<?php

use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
<<<<<<< HEAD
Route::get('tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasks', compact('tasks'));
});

Route::post('create', function () {
    $task_name = request('name');
    DB::table('tasks')->insert(['name' => $task_name]);
    return redirect('tasks');
});
Route::post('delete/{id}', function ($id) {
    DB::table('tasks')->where('id', $id)->delete();
    return redirect()->back();
});
Route::post('edit/{id}', function ($id) {
    $task=DB::table('tasks')->where('id', $id)->first();
    $tasks=DB::table('tasks')->get();
    return view('tasks', compact('task','tasks'));
});
Route::post('update', function () {
    $id=$_POST['id'];
    DB::table('tasks')->where('id','=', $id)->update(['name'=>$_POST['name']]);
    return redirect('tasks');
=======


Route::get('tasks', [taskController::class,'index']);
Route::post('create',[taskController::class,'create']);
Route::post('delete/{id}',[taskController::class,'destroy']);
Route::post('edit/{id}',[taskController::class,'edit']);
Route::post('update',[taskController::class,'update']);

Route::get('app',function(){
    return view('layouts.app');
>>>>>>> 1291520 (first commit)
});



Route::get('/users', [UsersController::class, 'index']);
Route::post('/users/create', [UsersController::class, 'create']);
Route::post('/users/edit/{id}', [UsersController::class, 'edit']);
Route::post('/users/update', [UsersController::class, 'update']);
Route::post('/users/delete/{id}', [UsersController::class, 'destroy']);
