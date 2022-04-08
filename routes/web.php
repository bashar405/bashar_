<!-- // Route::get('/', function () {
// return view('welcome');
// });



//Route::get('/aboute', function () {

// $name='bashar';
// $age=21;

// $tasks=['task1','task2','task3'];

// return view('aboute',[
// 'name'=>$name,
// 'age'=>$age
// ]);

// return view('aboute')->with('name',$name)->with('age',$age);
//return view('aboute',compact('name','age'));

// $tasks=['1'=> 'task1', '2'=> 'task2','3'=> 'task3'];

// return view('aboute',compact('tasks'));
// });


// route::get('/contact',function(){

// return view('Contact_us');
// });

// Route::post('/contact2',function(){

// $name = $_POST['name'];
// return view('Contact_us' , compact('name'));
// });

// Route::get('/task/{id}', function ($id) {

// //$tasks=['1'=> 'task1', '2'=> 'task2','3'=> 'task3'];

// //$task = $tasks[$id];
// $tasks = DB::table('tasks')->find($id);
// return view('show' ,compact('task'));
// });

// Route::get('tasks', function (){

// });
//Route::post('store',[taskcontroller::class,'store'])->name('tasks.store');
//Route::get('tasks',[Taskcontroller::class,'index'])->name('tasks.index');
//Route::get('/task/{id}',[Taskcontroller::class,'show'])->name('tasks.show');


 -->

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;

Route::get('tasks',[TaskController::class,'index'])->name('tasks');
Route::get('/tasks/{id}',[TaskController::class,'show'])->name('show');
Route::post('store',[TaskController::class,'store'])->name('store');