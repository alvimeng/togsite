@extends('layouts.site')
@section('content')

<div class="container">
    <div class="row">
        <div class="col m4">
	<h4>Cadastre-se no Tog</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt feugiat accumsan. Etiam vitae dolor ultrices, sollicitudin nulla nec, dapibus turpis. Fusce nec vehicula quam, sed tincidunt est.</p>
            <div class="card">
                <div class="card-content white-text light-green darken-2 z-depth-0">
                    <p> <b>Consumidor</b></p>
                </div>
                <div class="card-content grey-text grey lighten-4">
                    <form action="{{ route('admin.usuarios.salvar') }}" method="post">
                        {{ csrf_field() }}
                        @include('admin.usuarios._form')
                        <button class="btn light-green darken-2">cadastrar</button>		
                    </form>
                </div>
            </div>
        </div>
        <div class="col m8 s12">
            <div class="card">
                <div class="card-content grey-text grey lighten-4">
                    <div class="video-container">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/u7XUUd7J4pE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-content white-text azul z-depth-0">
                   <p> <b>Faça parte dessa rede</b></p>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
