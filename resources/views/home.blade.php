@extends('admin.layouts.app')

@section('title', 'Home')

@section('content')
    <br><br><br>
    <h1>{{auth()->user()->name}} seja Bem vindo! Escolha uma das opções no menu acima</h1>

@endsection