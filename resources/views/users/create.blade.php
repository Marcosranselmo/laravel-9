@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name')}}">
        <input type="email" name="email" placeholder="Email:" value="{{ old('email')}}">
        <input type="password" name="password" placeholder="Senha:">
        <button type="submit">Enviar</button>
    </form>

    {{-- <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('users._partials.form')
    </form> --}}
@endsection

