<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index()
    {
        // $tasks= DB::table('tasks')->orderBy('name')->get();
       $tasks=Task::all() ->sortBy('name');
        return view('tasks.tasks', compact('tasks'));
    }

    public function show($id)
    {
        // $task= DB::table('tasks')->find($id);

        Task::find($id);

        return view('tasks.show', compact('task'));
    }


    public function store(Request $request)
    {

    //  DB::table('tasks')->insert([
        //      'name'=> $request->name
        //  ]);
        $task=new Task();
        $task->name= $request->name;
        $task->save();

        return redirect()->back();
    }



    public function destroy($id)
    {
        //DB::table('tasks')->where('id', $id)->delete();
        // Task::find($id)->delete();
        //Task::find($id);
        Task::destroy($id);
        return redirect()->back();
    }


    public  function edit($id){
       $data= Task::find($id);
    //    $data= DB::table('tasks')->find($id);
    $tasks=Task::all() ->sortBy('name');
    //    $tasks= DB::table('tasks')->orderBy('name')->get();
        return view('edit',compact('data','tasks'));
    }
    public function update(request $request,$id){
        // $data= DB::table('tasks')->find($id);
        // $tasks=DB::table('tasks')->where('id',$id)->update(['name'=>$request->name]);
        // return redirect('/');

       $data = task::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect('/');

    }
}

// public function store(){

    //  DB::table('tasks')->insert([
    //      'name'=> $_POST['name']
    //  ]);
    // return redirect()->back();
    // }