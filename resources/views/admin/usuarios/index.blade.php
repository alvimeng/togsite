@extends('layouts.app')

@section('content')
	<div class="container">
            <h2 class="center">Lista de Usuários</h2>	
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
						<td>
							<a class="btn orange" href="{{ route('admin.usuarios.editar',$usuario->id) }}">Editar</a>
                                                        <a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.usuarios.deletar',$usuario->id) }}' }">Deletar</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection
