@extends('layouts.app')
@section('content')
    <h1>Add New Cat</h1>
    <form action="{{ route('cats.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="age">Age:</label>
        <input type="text" name="age" id="age">
        <label for="breed">Breed:</label>
        <input type="text" name="breed" id="breed">
        <label for="sex">Sex:</label>
        <input type="text" name="sex" id="sex">
        <button type="submit">Save</button>
    </form>
@endsection
