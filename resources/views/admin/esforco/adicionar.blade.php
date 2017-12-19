@extends('layouts.site')

@section('content')
	<div class="container">
        <form action="{{ route('esforco.salvar') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.esforco._form')
            <button class="btn light-green darken-2">Criar Esforço</button>
        </div>
		</form>
    </div>
@endsection
