<?php


namespace App\Http\Controllers;
use App\Task;



use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function store(Request $request){
    
        $task = new Task;

        $this->validate($request, [
            'task' => 'required'
        ]);

        $task->task=$request->task;
        $task->save();

        $data=Task::all();

        return view('tasks')->with('tasks',$data);

    }
}
