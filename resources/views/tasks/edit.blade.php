@extends('layouts')

@section('content')
    <div class="container">
        <div class="navbar">
            <h1>Tasks</h1>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="mt-2 h4" for="task_name">Task Name:</label>
                <input class="form-control" type="text" id="task_name" name="task_name"
                    value="{{ old('task_name', $task->task_name) }}">

            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="no_emp">No. of Employee:</label>
                <input class="form-control" type="text" id="no_emp" name="no_emp"
                    value="{{ old('no_emp', $task->no_emp) }}">

            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="location">Location:</label>
                <input class="form-control" type="text" id="location" name="location"
                    value="{{ old('location', $task->location) }}">

            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="days">No. of Days:</label>
                <input class="form-control" type="text" id="days" name="days"
                    value="{{ old('days', $task->days) }}">

            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="gender"> Required Gender:</label>
                <input class="form-control" type="text" id="gender" name="gender"
                    value="{{ old('gender', $task->gender) }}">

            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="salary">Salary:</label>
                <input class="form-control" type="text" id="salary" name="salary"
                    value="{{ old('salary', $task->salary) }}">

            </div>
            <button class="btn btn-success mt-1" type="submit">Update</button>
        </form>

    </div>
@endsection
