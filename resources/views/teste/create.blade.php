@extends('admin.layouts.app')

@section('title', 'Cadastro de testes')
    
@section('content')
<div class="offset-5 ">
    <br><br><br>
    <h2>Cadastre o seu teste!</h2>
    <form action="{{route('testes.store')}}" method="post">
    @csrf
        Nome do teste :: <br><input class=" col-md-4" type="text" name="name" id="name" value="{{old('name')}}" required><br>
        Pontuação mínima para aprovação :: <br><input class=" col-md-4" type="text" name="pontos_aprovacao" id="pontos_aprovacao" value="{{old('pontos_aprovacao')}}" required><br>
        <input type="submit" name="enviado" value="Cadastrar">
    </form>
</div>
@endsection