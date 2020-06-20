@extends('admin.layouts.app')

@section('title', 'Testes')

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('questoes.create')}}" class="btn btn-success flot-right">Cadastrar Questoes</a>
            <h2>Questoes disponíveis</h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Enunciado</th>
            <th>Valor da questão</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($questoes as $questao)
            <tr>
                <td>{{$questao->enunciado}}</td>
                <td>{{$questao->valor_questao}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('questoes.edit',['questo' => $questao->id])}}" class="btn btn-warning">Alterar</a>
                        <form action="{{route('questoes.destroy',['questo' => $questao->id])}}" method="POST">
                            @csrf
                            @method('DELETE')    
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum registro</td>
            </tr>
        @endforelse 
        </tbody>
    </table>
@endsection