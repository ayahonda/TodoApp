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

    public function done($id) {
        $task = Task::find($id);
        $task->status = 'done';
        $task->save();

        return redirect('/');
    }//

    public function reset($id) {
        $done_task = Task::find($id);
        $done_task->status = null;
        $done_task->save();

        return redirect('/');
    }//


    public function index(Request $request) {
        $tasks = Task::whereNull('status')->get();
        $done_tasks = Task::where('status', 'done')->get();
    
        return view('index', [
            "tasks" => $tasks,
            "done_tasks" => $done_tasks,

        ]);

    }//
}


