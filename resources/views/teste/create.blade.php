@extends('admin.layouts.app')

@section('title', 'Cadastro de testes')
    
@section('content')
<div class="offset-5 ">
    <br><br><br>
    <h2>Cadastre o seu teste!</h2>
    <form action="{{route('testes.store')}}" method="post">
    @csrf
        Nome do teste :: <br><input class=" col-md-4" type="text" name="nomeTeste" id="respostaA" value="{{old('nomeTeste')}}" required><br>
        Pontuação mínima para aprovação :: <br><input class=" col-md-4" type="text" name="pontMinAprov" id="respostaB" value="{{old('pontMinAprov')}}" required><br>
        <input type="submit" name="enviado" value="Cadastrar">
    </form>
</div>
@endsection