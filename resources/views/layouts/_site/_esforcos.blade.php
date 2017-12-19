
@foreach($esforcos as $esforco)	
    @if ($loop->first)
    <div class="col-md-12 mais-esforco">
        <div class="card horizontal">
            <div class="card-image">
                    @if (empty($esforco->imagem))

                    @else
                        <a href="{{route ('site.esforco',[$esforco->id,str_slug($esforco->nome,'-')])}}"><img style="max-height:100%;" src="/{{($esforco->imagem)}}" alt="{{ $esforco->nome }}"></a>
                    @endif 
            </div>
            <div class="card-stacked">
                <div class="card-content grey-text grey lighten-4">
                    <a href="{{route ('site.esforco',[$esforco->id,str_slug($esforco->nome,'-')])}}"<span class="card-title"><b>{{$esforco->nome}}</b></span></a>
                    <p>{{$esforco->descricao}}</p>  
                </div>
                <div class="card-content grey-text grey lighten-4">
                    <i class="medium material-icons"style="color:#90cee2">perm_identity</i><span class="user-esforco"></span>
                    @if (empty($esforco->participantes))
                        <span class="number-esforco">1 Pessoa</span>
                    @else
                        <span class="number-esforco">{{count($esforco->participantes + 1)}} Pessoas </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
        @else
        <div class="col m4">
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
        @endif
    @endforeach

@if($paginacao)
    <div align="center" class="row">
        {{ $esforcos->links() }}
    </div>
@endif

