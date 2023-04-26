@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1>Listgem dos usuários
    <a href="{{ route('users.create') }}">+</a>
</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }}
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                <a href="{{ route('users.show', $user->id) }}">Deletar</a>
                {{-- <a href="{{ route('users.show', $user->id) }}">Anotações (0)</a> --}}
            </li>
        @endforeach
    </ul>

@endsection