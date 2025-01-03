@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
    <a href="/users/create">Create User</a>
@endsection
