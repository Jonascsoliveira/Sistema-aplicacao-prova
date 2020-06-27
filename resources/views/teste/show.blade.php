@extends('admin.layouts.app')

@section('title', 'Home')

@section('content')
    <br><br><br>
    <h2>Bem vindo ao teste: {{$testes->name}}</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Enunciado</th>
            </tr>
            </thead>
        <tbody>
        <form action="{{route('testes.result',['testis' => $testes->id])}}" method="post">
            @csrf
            @php $i = 0; @endphp
            @forelse($testes->questao as $teste)
            @php $i++; @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{$teste->enunciado}}<br>
                        <table class="table table-striped">
                            <tr><input type="radio" name="resposta{{$i}}" value="A">A) {{$teste->respostaA}}</tr><br>
                            <tr><input type="radio" name="resposta{{$i}}" value="B">B) {{$teste->respostaB}}</tr><br>
                            <tr><input type="radio" name="resposta{{$i}}" value="C">C) {{$teste->respostaC}}</tr><br>
                            <tr><input type="radio" name="resposta{{$i}}" value="D">D) {{$teste->respostaD}}</tr><br>
                            <tr><input type="radio" name="resposta{{$i}}" value="E">E) {{$teste->respostaE}}</tr><br>
                        </table>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Desculpe não há registros de questões para este teste!</td>
                </tr>
            @endforelse
            <input type="submit" class="btn btn-success mb-4" value="Finalizar tentativa">
        </form>
        </tbody>
    </table>
    
    

@endsection
