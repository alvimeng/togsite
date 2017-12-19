@extends('layouts.site')

@section('content')

@include('layouts._site._banner')

<div class="container">
    <div class="row">
        <div class="col m12">
            <div class="row">
                <div class="col s12 m3">
                  <div class="card blue-grey darken-1">
                    <div class="card-content grey-text grey lighten-2 z-depth-0">
                        <p> <b>Categorias</b></p>
                    </div>
                    <div class="card-content grey-text grey lighten-4">
                        <ul>
                            @foreach ($categorias as $categoria)
                                <li><a style="color: #9e9e9e;" href="/pesquisar?local=&categoria_id={{$categoria->id}}&nome=">{{$categoria->categoria}}</a></li>
                            @endforeach
                        </ul>
                        <a href="{{route ('esforco.novo')}}" class="call-action-verde">+ Criar projeto coletivo</a>
                    </div>
                  </div>
                  
                    <div class="card">
                        <div class="card-content white-text light-green darken-2 z-depth-0">
                            <p> <b>Faça parte dessa rede</b></p>
                        </div>
                        <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/u7XUUd7J4pE" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col s12 m9">
                    <div class="card">
                        <div class="card-content white-text azul z-depth-0">
                            <p> <b>{{count($esforcos)}} esforços</b></p>
                        </div>
                    </div>
                        @include('layouts._site._esforcos')
                </div>
            </div>
        </div>
    </div>
@endsection
