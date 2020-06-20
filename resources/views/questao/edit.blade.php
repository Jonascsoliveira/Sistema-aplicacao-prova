@extends('admin.layouts.app')

@section('title', 'Cadastro de Questões')
    
@section('content')
<div class="offset-5 ">
    <br><br><br>
    <h2>Cadastre suas perguntas!</h2>
    <form action="{{route('questoes.update',['questo' => $questao->id])}}" method="POST">
    @csrf
    @method("PUT")
        Enunciado :: <br><textarea class=" col-md-4" name="enunciado" id="enunciado" cols="30" rows="5">{{$questao->enunciado}}</textarea><br>
        Resposta A :: <br><input class=" col-md-4" type="text" name="respostaA" id="respostaA" value="{{$questao->respostaA}}" required><br>
        Resposta B :: <br><input class=" col-md-4" type="text" name="respostaB" id="respostaB" value="{{$questao->respostaB}}" required><br>
        Resposta C :: <br><input class=" col-md-4" type="text" name="respostaC" id="respostaC" value="{{$questao->respostaC}}" required><br>
        Resposta D :: <br><input class=" col-md-4" type="text" name="respostaD" id="respostaD" value="{{$questao->respostaD}}" required><br>
        Resposta E :: <br><input class=" col-md-4" type="text" name="respostaE" id="respostaE" value="{{$questao->respostaE}}" required><br>
        Resposta Correta :: <br><select name="resposta_correta" id="respostaCorreta">
                                    <option value="A" {{ $questao->resposta_correta =='A'? 'selected':''}}>A</option>
                                    <option value="B" {{ $questao->resposta_correta =='B'? 'selected':''}}>B</option>
                                    <option value="C" {{ $questao->resposta_correta =='C'? 'selected':''}}>C</option>
                                    <option value="D" {{ $questao->resposta_correta =='D'? 'selected':''}}>D</option>
                                    <option value="E" {{ $questao->resposta_correta =='E'? 'selected':''}}>E</option>
                                </select><br><br>
        Valor da Questão :: <br><input class=" col-md-4" type="text" name="valor_questao" id="valor_questao" value="{{$questao->valor_questao}}" required><br>
        Qual teste pertence::<br><select name="teste_id" id="teste_id" value="{{$questao->teste_id}}">>
                            @forelse($testes as $teste)
                                <option value="{{$teste->id}}" @if( $teste->id === $questao->teste_id) selected = 'selected' @endif >{{$teste->name}}</option>
                            @empty
                                <option value="">Não há testes cadastrados</option>
                            @endforelse 
                            </select><br><br>
        <input type="submit" value="Alterar">
    </form>
</div>
@endsection