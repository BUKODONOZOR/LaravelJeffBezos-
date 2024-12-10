
@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->names }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->country->name }}</td>
                    <td>
                        <!-- Button to show user details -->
                        <a href="{{ route('users.show', $user) }}" class="btn btn-info">View</a>

                        <!-- Edit button -->
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>

                        <!-- Delete form -->
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
