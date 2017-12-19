@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Empresa</h2>
	<div class="row">
		<form action="{{ route('admin.empresa.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.empresa._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection
