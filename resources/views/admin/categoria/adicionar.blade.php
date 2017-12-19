@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Categoria</h2>
	<div class="row">
		<form action="{{ route('admin.categoria.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.categoria._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection
