@extends('layouts.app')
@section('content')
    <h1>Cats</h1>
    <a href="{{ route('cats.create') }}">Add New Cat</a>
    <ul>
        @foreach ($cats as $cat)
            <li>{{ $cat->name }} {{ $cat->age }} {{ $cat->breed }} {{ $cat->sex }}</li>
        @endforeach
    </ul>
@endsection
