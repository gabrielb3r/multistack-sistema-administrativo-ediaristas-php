@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
@stop

@section('content')
    <form action="{{route('usuarios.store')}}" method="post">
        @include('_mensagens')  
        @include('usuarios._form')
    </form>
@stop

