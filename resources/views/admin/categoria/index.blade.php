@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Lista de Categorias</h2>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Categoria</th>									
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->categoria }}</td>
						<td>
							<a class="btn orange" href="{{ route('admin.categoria.editar',$registro->id) }}">Editar</a>
							<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.categoria.deletar',$registro->id) }}' }">Deletar</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="{{route('admin.categoria.adicionar')}}">Adicionar</a>
		</div>
	</div>

@endsection
