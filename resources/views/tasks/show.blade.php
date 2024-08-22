@extends('layouts')
@section('content')
    <div class="container">
        <div class="navbar">
            <h1 class="text-success">Tasks Details</h1>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>


    <div class="containe p-3 rounded" style="border: 2px solid blue">
        <h1>Task Name: <span>{{ $task->task_name }}</span></h1>
        <h1>No of Employee: <span>{{ $task->no_emp }}</span></h1>
        <h1>Location: <span>{{ $task->location }}</span></h1>
        <h1>No of Days: <span>{{ $task->days }}</span></h1>
        <h1>Gender Required: <span>{{ $task->gender }}</span></h1>
        <h1>Salary: <span>{{ $task->salary }}</span></h1>
        <div class="btn d-flex gap-2">
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-dark">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
