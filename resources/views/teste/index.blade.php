@extends('admin.layouts.app')

@section('title', 'Testes')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('testes.create')}}" class="btn btn-success flot-right"></a>
            <h2>Testes disponíveis</h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
       @forelse($testes as $teste)
            <tr>
                <td>{{$teste->id}}</td>
                <td>{{$teste->name}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum registro</td>
            </tr>
        @endforelse 
        </tbody>
    </table>
@endsection