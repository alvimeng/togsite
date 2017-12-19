@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Categoria</h2>
	<div class="row">
		<form action="{{ route('admin.categoria.atualizar',$registro->id) }}" method="post">

		{{csrf_field()}}
		<input type="hidden" name="_method" value="put">
		@include('admin.categoria._form')

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection
