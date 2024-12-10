<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalles del Usuario</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $user->names }} {{ $user->lastname }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Género:</strong> {{ $user->gender }}</p>
            <p><strong>Teléfono:</strong> {{ $user->phone }}</p>
            <p><strong>Pais:</strong> {{ $user->country->name }}</p>

            <a href="{{ url('/users') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
@endsection
