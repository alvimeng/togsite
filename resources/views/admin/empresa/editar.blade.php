@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Empresa</h2>
	<div class="row">
		<form action="{{ route('admin.empresa.atualizar',$registro->id) }}" method="post">

		{{csrf_field()}}
		<input type="hidden" name="_method" value="put">
		@include('admin.empresa._form')

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection
