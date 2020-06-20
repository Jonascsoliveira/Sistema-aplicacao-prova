@extends('admin.layouts.app')

@section('title', 'Cadastro de Questões')
    
@section('content')
<div class="offset-5 ">
    <br><br><br>
    <h2>Cadastre suas perguntas!</h2>
    <form action="{{route('questoes.store')}}" method="post">
    @csrf
        Enunciado :: <br><textarea class=" col-md-4" name="enunciado" id="enunciado" cols="30" rows="5">{{old('enunciado')}}</textarea><br>
        Resposta A :: <br><input class=" col-md-4" type="text" name="respostaA" id="respostaA" value="{{old('respostaA')}}" required><br>
        Resposta B :: <br><input class=" col-md-4" type="text" name="respostaB" id="respostaB" value="{{old('respostaB')}}" required><br>
        Resposta C :: <br><input class=" col-md-4" type="text" name="respostaC" id="respostaC" value="{{old('respostaC')}}" required><br>
        Resposta D :: <br><input class=" col-md-4" type="text" name="respostaD" id="respostaD" value="{{old('respostaD')}}" required><br>
        Resposta E :: <br><input class=" col-md-4" type="text" name="respostaE" id="respostaE" value="{{old('respostaE')}}" required><br>
        Resposta Correta :: <br><select name="resposta_correta" id="resposta_correta">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select><br><br>
        Valor da Questão :: <br><input class=" col-md-4" type="text" name="valor_questao" id="valor_questao" value="{{old('valor_questao')}}" required><br>
        Qual teste pertence::<br><select name="teste_id" id="teste_id">
                            @forelse($testes as $teste)
                                <option value="{{$teste->id}}">{{$teste->name}}</option>
                            @empty
                                <option value="">Não há testes cadastrados</option>
                            @endforelse 
                            </select><br><br>
        <input type="hidden" name="id" value="{{old('id')}}">
        <input type="submit" name="enviado" value="Cadastrar">
    </form>
</div>
@endsection