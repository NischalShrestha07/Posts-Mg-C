@extends('layouts')
@section('content')
    <div class="container">
        @if (@session('success'))
            <span class="alert alert-success">{{ session('success') }}</span>
        @endif
        <div class="navbar">
            <h1>Tasks</h1>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
        </div>

        <table class="table table-respondive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Name</th>
                    <th>Employee No.</th>
                    <th>Location</th>
                    <th>Days</th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($task as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->task_name }}</td>
                        <td>{{ $item->no_emp }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->days }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->salary }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('tasks.show', $item) }}" class="btn btn-warning">View</a>
                            <a href="{{ route('tasks.edit', $item) }}" class="btn btn-dark">Edit</a>
                            <form action="{{ route('tasks.destroy', $item) }}" method="POST" class="btn btn-danger">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Do you want to delete it?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
