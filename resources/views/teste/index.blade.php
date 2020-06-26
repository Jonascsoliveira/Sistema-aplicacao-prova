@extends('admin.layouts.app')

@section('title', 'Testes')

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('testes.create')}}" class="btn btn-success flot-right">Cadastrar Testes</a>
            <h2>Testes disponíveis</h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Título</th>
            <th>Responsável</th>
            <th>Pontos para Aprvação</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($testes as $teste)
            <tr>
                <td>{{$teste->name}}</td>
                <td>{{$teste->user->name}}</td>
                <td>{{$teste->pontos_aprovacao}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('testes.show',['testis' => $teste->id])}}" class="btn btn-info">Realizar Teste</a>
                        <a href="{{route('testes.edit',['testis' => $teste->id])}}" class="btn btn-warning">Alterar</a>
                        <form action="{{route('testes.destroy',['testis' => $teste->id])}}" method="POST">
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
    {{$testes->links()}}
@endsection