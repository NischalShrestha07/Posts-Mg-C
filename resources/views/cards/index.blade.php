@extends('layouts')

@section('content')
    <div class="navbar">
        <h1>Cards</h1>
        <a href="{{ route(cards . add) }}" class="btn btn-success">Add Card</a>

    </div>
@endsection
