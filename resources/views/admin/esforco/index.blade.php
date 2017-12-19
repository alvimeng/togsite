@extends('layouts.site')

@section('content')
	<div class="container">

        <div class="col m10 offset-m1">
            <h3>Meus Esforços</h3>
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>									
                            <th>Categoria</th>
                            <th>Data Limite</th>
                            <th>Localidade</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->nome }}</td>
                            <td>{{ $registro->categoria->categoria }}</td>
                            <td>{{ Carbon\Carbon::parse($registro->termino)->format('d-m-Y') }}</td>
                            <td>{{ $registro->local }}</td>
                            <td>
                                <a class="btn orange" href="{{ route('esforco.editar',$registro->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>
            <div class="row">
                <a class="btn blue" href="{{route('esforco.novo')}}">Criar Esforço</a>
            </div>
        </div>
    </div>
@endsection
