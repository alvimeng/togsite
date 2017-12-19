<form action="{{route('site.pesquisar')}}" >
<div class="col m4 s12">
    <div class="icon-filtro">
        <img src="http://www.tog.social/images/icon-local.png">
        <input class="icon-local" name="local" style="border: none;" placeholder="Sua Cidade">
    </div>
</div>
<div class="col m3 s12">
    <div class="icon-filtro">
        <select class="browser-default" name="categoria_id" id="sel">
        <option>Todas Categorias</option>
        
        </select>            
    </div>
</div>
<div class="col m5 s12">
    <div class="icon-filtro">
        <input id="filtro-palavra" name="nome" style="border: none;" placeholder="Produto ou Serviço">
        <button class="btn-pesquisar"><i class="material-icons">search</i></button>
    </div>
</div>
</form>