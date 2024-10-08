<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::all();

        return view('tasks.index', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required',
            'no_emp' => 'required',
            'location' => 'required',
            'days' => 'required',
            'gender' => 'required',
            'salary' => 'required',
        ]);
        // Task::create($request->all());
        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {


        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name' => 'required',
            'no_emp' => 'required',
            'location' => 'required',
            'days' => 'required',
            'gender' => 'required',
            'salary' => 'required',
        ]);
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task Deleted Successfully.');
    }
}
