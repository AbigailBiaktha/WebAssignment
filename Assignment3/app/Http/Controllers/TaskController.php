<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'status'      => 'required|in:To-Do,In Progress,Done',
        ]);

        $newTask = Task::create($data);
        return redirect()->route('task.index');
    }

    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('task.edit', ['task' => $task]);
    }

    public function update(Task $task, Request $request)
    {
        $data = $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'status'      => 'required|in:To-Do,In Progress,Done',
        ]);

        $task->update($data);

        return redirect(route('task.index'))->with('success', 'Task Updated Successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect(route('task.index'))->with('success', 'Task Deleted Successfully');
    }

    public function sidebar()
    {
        return view('layout.sidebar');
    }

    // API Endpoints

    public function get_tasks()
    {
        $tasks = Task::all();
        return response()->json([
            'tasks'   => $tasks
        ]);
    }

    public function create_task(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'status'      => 'required|in:To-Do,In Progress,Done',
        ]);

        $newTask = Task::create($data);

        return response()->json([
            'message' => 'Task Created',
            'status'  => 'success',
            'task'    => $newTask
        ]);
       
    }

    public function update_task(Task $task, Request $request)
    {
        $data = $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'status'      => 'required|in:To-Do,In Progress,Done',
        ]);

        $task->update($data);

        return response()->json([
            'message' => 'Task Updated',
            'status'  => 'success',
            'task'    => $task
        ]);
    }

    public function delete_task(Task $task)
    {
        $task->delete();

        return response()->json([
            'message' => 'Task Deleted',
            'status'  => 'success',
        ]);
    }
}
