@extends('layouts.app')
@section('content')
    <h1>{{ $cat->name }}</h1>
    <ul>
        <li><strong>Age:</strong> {{ $cat->age }}</li>
        <li><strong>Breed:</strong> {{ $cat->breed }}</li>
        <li><strong>Sex:</strong> {{ $cat->sex }}</li>
    </ul>
    <a href="{{ route('cats.index') }}">Back to List</a>
    <a href="{{ route('cats.edit', $cat->id) }}">Edit</a>
    <form action="{{ route('cats.destroy', $cat->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
