@extends('admin.layouts.app')

@section('title', 'Cadastro de Questões')
    
@section('content')
<div class="offset-5 ">
    <br><br><br>
    <h2>Cadastre suas perguntas!</h2>
    <form action="{{route('questoes.store')}}" method="post">
    @csrf
        Enunciado :: <br><textarea class=" col-md-4" name="enunciado" id="enunciado" cols="30" rows="5">{{$questao->enunciado}}</textarea><br>
        Resposta A :: <br><input class=" col-md-4" type="text" name="respostaA" id="respostaA" value="{{$questao->respostaA}}" required><br>
        Resposta B :: <br><input class=" col-md-4" type="text" name="respostaB" id="respostaB" value="{{$questao->respostaB}}" required><br>
        Resposta C :: <br><input class=" col-md-4" type="text" name="respostaC" id="respostaC" value="{{$questao->respostaC}}" required><br>
        Resposta D :: <br><input class=" col-md-4" type="text" name="respostaD" id="respostaD" value="{{$questao->respostaD}}" required><br>
        Resposta E :: <br><input class=" col-md-4" type="text" name="respostaE" id="respostaE" value="{{$questao->respostaE}}" required><br>
        Resposta Correta :: <br><select name="respostaCorreta" id="respostaCorreta" value="{{$questao->respostaCorreta}}">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select><br><br>
        Valor da Questão :: <br><input class=" col-md-4" type="text" name="valor_questao" id="valor_questao" value="{{$questao->valor_questao}}" required><br>
        <input type="hidden" name="id" value="{{$questao->id}}">
        <input type="hidden" name="id" value="{{$questao->id_teste}}">
        <input type="submit" name="enviado" value="Alterar">
    </form>
</div>
@endsection