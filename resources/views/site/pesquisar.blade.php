@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2">
@foreach($esforcos as $esforco)	

    <div class="col m6">
    <div class="card">
        <div class="card-image">
        
            @if (empty($esforco->imagem))

            @else
                <a href="{{route ('site.esforco',[$esforco->id,str_slug($esforco->nome,'-')])}}"><img src="/{{($esforco->imagem)}}" alt="{{ $esforco->nome }}"></a>
            @endif   
        </div>
        <div class="card-content grey-text grey lighten-4">
            <a href="{{route ('site.esforco',[$esforco->id,str_slug($esforco->nome,'-')])}}"><span class="card-title"><b>{{$esforco->nome}}</b></span></a>
            <p>{{$esforco->descricao}}</p><br>
            <i class="medium material-icons"style="color:#90cee2">perm_identity</i><span class="user-esforco"></span>
                @if (empty($esforco->participantes))
                    <span class="number-esforco">1 Pessoa</span>
                @else
                    <span class="number-esforco">{{count($esforco->participantes + 1)}} Pessoas </span>
                @endif
        </div>
    </div>
    </div>
@endforeach
</div>
</div>
@endsection