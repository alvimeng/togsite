@extends('layouts.site')
@section('content')

<div class="container">
    <div class="row">
        <form action="{{route('admin.cadastro.atualizar', $usuario->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
		{{ csrf_field() }}
		@include('admin.cadastros._form')	
	</form>
    </div>
</div>

@endsection
