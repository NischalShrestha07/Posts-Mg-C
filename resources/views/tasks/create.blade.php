@extends('layouts')
@section('content')
    <div class="container">
        <div class="navbar">
            <h1>Create Task</h1>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
        </div>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label class="mt-2 h4" for="task_name">Task Name:</label>
                <input class="form-control" type="text" id="task_name" name="task_name" placeholder="Task Name">
                @error('task_name')
                    <span class="btn btn-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="no_emp">No. of Employee:</label>
                <input class="form-control" type="text" id="no_emp" name="no_emp"
                    placeholder="No. of Employee Needed">
                @error('no_emp')
                    <span class="btn btn-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="location">Location:</label>
                <input class="form-control" type="text" id="location" name="location" placeholder="Location">
                @error('location')
                    <span class="btn btn-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="days">No. of Days:</label>
                <input class="form-control" type="text" id="days" name="days" placeholder="No. of Days">
                @error('days')
                    <span class="btn btn-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="gender"> Required Gender:</label>
                <input class="form-control" type="text" id="gender" name="gender" placeholder="Gender">
                @error('gender')
                    <span class="btn btn-danger">
                        {{ $message }}
                    </span>
                @enderror
                {{-- ajhs --}}
            </div>
            <div class="form-group">
                <label class="mt-2 h4" for="salary">Salary:</label>
                <input class="form-control" type="text" id="salary" name="salary" placeholder="Monthly Salary">
                @error('salary')
                    <span class="btn btn-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button class="mt-2 btn btn-success" type="submit">Save</button>
        </form>
    </div>
@endsection
