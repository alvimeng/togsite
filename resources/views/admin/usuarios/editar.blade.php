@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="center">Editar Usuário</h2>
	<div class="row">
		<form action="{{ route('admin.usuarios.atualizar',$usuario->id) }}" method="post" enctype="multipart/form-data">

		{{csrf_field()}}
		<input type="hidden" name="_method" value="put">
		@include('admin.usuarios._formadmin')

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
@endsection
