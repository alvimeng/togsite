@extends('layouts.site')

@section('content')
	<div class="container">
        <form action="{{ route('esforco.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.esforco._form')
            <button class="btn light-green darken-2">Editar Esforço</button>
        </div
		</form>
    </div>
@endsection
