@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Movie Details</h1>

    <p><strong>Title:</strong> {{ $movie->title }}</p>
    <p><strong>Genre:</strong> {{ $movie->genre }}</p>
    <p><strong>Year:</strong> {{ $movie->year }}</p>

    <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to List</a>
    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Delete this movie?')" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
