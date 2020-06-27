@extends('admin.layouts.app')

@section('title', 'Home')

@section('content')
    <br><br><br>
    @empty($mensagem)
        <h3>{{auth()->user()->name}} seja Bem vindo! Escolha uma das opções no menu acima</h3>
    @else
        <h3>{{$mensagem}}</3>
    @endempty
@endsection