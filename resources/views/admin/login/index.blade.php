@extends('layouts.site')
@section('content')

<div class="container">
    <div class="row">
        <div class="col m6 offset-m3 s12">
	<h3>Entrar</h3>
	<form action="{{ route('admin.login') }}" method="post">
		{{ csrf_field() }}
		@include('admin.login._form')
		<button class="btn blue">Entrar</button>		
	</form>
        </div>
    </div>
</div>

@endsection
