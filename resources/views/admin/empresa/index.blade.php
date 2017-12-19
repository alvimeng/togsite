@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Lista de Empresas</h2>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Empresa</th>
						<th>Endereco</th>									
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->empresa }}</td>
						<td>{{ $registro->endereco }}</td>
						<td>
							<a class="btn orange" href="{{ route('admin.empresa.editar',$registro->id) }}">Editar</a>
							<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.empresa.deletar',$registro->id) }}' }">Deletar</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="{{route('admin.empresa.adicionar')}}">Adicionar</a>
		</div>
	</div>

@endsection
