<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('task.index',['tasks'=>$tasks]);
    }

    public function create(){
        return view('task.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:To-Do,In Progress,Done',
        ]);
    
        $newTask =Task::create($data);
        return redirect()->route('task.index');
    }

    public function show(Task $task)
   {
    return view('task.show', compact('task'));
   }

   

}
