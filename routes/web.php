<?php

use Illuminate\Support\Facades\Route; //import class

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



Route::get('/aboute', function () {

    // $name='bashar';
    // $age=21;

  //  $tasks=['task1','task2','task3'];

    // return view('aboute',[
    //   'name'=>$name,
    //   'age'=>$age
    // ]);

    // return view('aboute')->with('name',$name)->with('age',$age);
   //return view('aboute',compact('name','age'));

   $tasks=['1'=> 'task1', '2'=> 'task2','3'=> 'task3'];
   
   return view('aboute',compact('tasks'));
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/task/{id}', function ($id) {

    $tasks=['1'=> 'task1', '2'=> 'task2','3'=> 'task3'];
    $task = $tasks[$id];
    return view('task' ,compact('task'));
});