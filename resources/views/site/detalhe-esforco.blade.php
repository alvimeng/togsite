@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row">
        <div class="col m4">
            <img class="responsive-img" src="/{{($esforco->imagem)}}">
            <div class="card grey lighten-5">
                    <div class="card-content">
                        <span class="card-title grey-text"><b>Detalhes do Esforço</b></span>
                        <table>
                        <tbody class="grey-text">
                        <tr>
                            <td class="tabela-detalhes">Categoria:</td>
                            <td>{{ $esforco->categoria->categoria }}</td>
                        </tr>
                        <tr>
                            <td class="tabela-detalhes">Local:</td>
                            <td>{{ $esforco->local }}</td>
                        </tr>
                        <tr>
                            <td class="tabela-detalhes">Data início:</td>
                            <td>{{ Carbon\Carbon::parse($esforco->inicio)->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <td class="tabela-detalhes">Data Término:</td>
                            <td>{{ Carbon\Carbon::parse($esforco->termino)->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <td class="tabela-detalhes">Participantes:</td>
                            @if (empty($esforco->participantes))
                            <td>1 Pessoa</td>
                            @else
                            <td> {{count($esforco->participantes + 1)}} Pessoas</td>
                            @endif
                        </tr>
                        <tr>
                            <td class="tabela-detalhes">Quantidade mínima de Participantes:</td>
                            <td>{{ $esforco->minparticipantes}}</td>
                        </tr>
                        <tr>
                            <td class="tabela-detalhes">Quantidade máxima de Participantes:</td>
                            <td>{{ $esforco->maxparticipantes}}</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
        </div>
        
        <div class="col m8">
            <h4>{{$esforco->nome}}</h4>
            <div class="divider"></div>
            <p class="descricao-esforco">{{$esforco->descricao}}</p>
            <div class="fb-share-button" 
                data-href="{{route ('site.esforco',[$esforco->id,str_slug($esforco->nome,'-')])}}" 
                data-layout="button_count">
            </div>
            <div class="divider"></div>

            <div class="col m6">
                <div class="card grey lighten-4">
                    <div class="card-content">
                        <span class="card-title cyan-text"><b>Fórum</b></span>
                        <table>
                        <tbody class="grey-text">
                        <tr>
                            <td>03/12/2017</td>
                            <td>Qual dia será a viagem?</td>
                        </tr>
                        <tr>
                            <td>04/12/2017</td>
                            <td>O Hotel possui piscina?</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="waves-effect waves-light btn">Pergunte</a>
                    </div>
                </div>
            </div>

            <div class="col m6">
                <div class="card azul">
                    <div class="card-content">
                        <span class="card-title white-text"><b>Participantes
                        @if (empty($esforco->participantes))
                            (1)
                        @else
                            ({{count($esforco->participantes + 1)}})
                        @endif
                         </b></span>
                        <table class="bordered">
                            <tbody class="white-text">
                            <tr>
                                <td>{{$esforco->user->name}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="waves-effect waves-light btn grey lighten-4 cyan-text">Todos Participantes</a>
                    </div>
                </div>
                <div class="card grey lighten-4">
                    <div class="card-content">
                        <span class="card-title cyan-text"><b>Propostas Recebidas</b></span>
                        <table>
                        <tbody class="grey-text">
                        <tr>
                            <td>Transportador Viagem Alegre</td>
                        </tr>
                        <tr>
                            <td>Turismo e Transporte Rothbar</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="waves-effect waves-light btn">Enviar Proposta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
@endsection