<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function store(Request $request) {
        $task = new Task;
        $task->name = $request->input('name');
        $task->save();

        return redirect('/');
    }//

    public function destroy($id) {
        Task::find($id)->delete();

        return redirect('/');
    }//



    public function index(Request $request) {
        $tasks = Task::all();
    
        return view('index', [
            "tasks" => $tasks
        ]);
    }//
}


