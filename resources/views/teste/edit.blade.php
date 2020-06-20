@extends('admin.layouts.app')

@section('title', 'Cadastro de testes')
    
@section('content')
<div class="offset-5 ">
    <br><br><br>
    <h2>Cadastre o seu teste!</h2>
    <form action="{{route('testes.update',['testis' => $teste->id])}}" method="post">
    @csrf
    @method("PUT")
        Nome do teste :: <br><input class=" col-md-4" type="text" name="name" id="name" value="{{$teste->name}}" required><br>
        Pontuação mínima para aprovação :: <br><input class=" col-md-4" type="text" name="pontos_aprovacao" id="pontos_aprovacao" value="{{$teste->pontos_aprovacao}}" required><br>
        <input type="submit" value="Editar">
    </form>
</div>
@endsection