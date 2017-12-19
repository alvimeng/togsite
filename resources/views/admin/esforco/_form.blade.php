<div class="row">
    <div class="col m4">
        <div class="row" style="margin-top:25px">	
            <div class="col m12 s12">
            @if(isset($registro->imagem))
                <img width="250" src="{{ asset($registro->imagem) }}">
            @endif
            </div>
            <div class="file-field input-field col m12 s12">
                <div class="btn azul">
                <span>Adicionar foto</span>
                    <input type="file" name="imagem">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validade">
                </div>		
            </div>
        </div>
    </div>
    <div class="col m8">

    <div class="row">
        <h4>Dados do Esforço</h4>
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="nome" class="validate" value="{{(isset($registro->nome) ? $registro->nome : old('nome'))}}">
                <label class="{{ $errors->has('nome') ? 'red-text' : '' }}">Nome do Esforço:</label>
                @if($errors->has('nome'))
                    <span class="invalido-form">
                       {{$errors->first('nome')}}
                    </span>
                @endif
            </div>
            <div class="input-field col s6">
                <select name="categoria_id">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{(isset($registro->categoria_id) && $registro->categoria_id == $categoria->id  ? 'selected' : '')}}>{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
                <label>Categoria:</label>
            </div>
        
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="cidade" class="validate" value="{{(isset($registro->cidade) ? $registro->cidade : old('cidade'))}}">
                <label class="{{ $errors->has('cidade') ? 'red-text' : '' }}">Cidade:</label>
                @if($errors->has('cidade'))
                    <span class="invalido-form">
                       {{$errors->first('cidade')}}
                    </span>
                @endif
            </div>
            <div class="input-field col s6">
                <input type="text" name="complemento" class="validate" value="{{(isset($registro->complemento) ? $registro->complemento : old('complemento'))}}">
                <label class="{{ $errors->has('complemento') ? 'red-text' : '' }}">Complemento:</label>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s6">
            <select name="local_exclusivo">
                <option value="nao" {{(isset($registro->forum) && $registro->forum == 'nao'  ? 'selected' : '')}}>Não</option>
                <option value="sim" {{(isset($registro->forum) && $registro->forum == 'sim'  ? 'selected' : '')}}>Sim</option>
            </select>
            <label>Este projeto coletivo é exclusivo para este local?</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" name="descricao" class="materialize-textarea">{{(isset($registro->descricao) ? $registro->descricao : old('descricao'))}}</textarea>
                <label for="textarea1" class="{{ $errors->has('descricao') ? 'red-text' : '' }}">Descrição do Esforço</label>
                @if($errors->has('descricao'))
                    <span class="invalido-form">
                       {{$errors->first('descricao')}}
                    </span>
                @endif
            </div>
        </div>
    <div class="row">
        <div class="input-field col s6">
            <span style="color: #9e9e9e;" class="{{ $errors->has('termino') ? 'red-text' : '' }}">Data para o Término do Esforço</span>
            <input type="text" name="termino" class="datepicker" placeholder="dd/mm/aaaa" value="{{(isset($registro->termino) ? Carbon\Carbon::parse($registro->termino)->format('d/m/Y') : old('termino'))}}">
            @if($errors->has('termino'))
                    <span class="invalido-form">
                       {{$errors->first('termino')}}
                    </span>
            @endif    
        </div>
    </div>
    <div class="row">
    <div class="input-field col s6">
            <input type="number" name="minparticipantes" class="validate" value="{{(isset($registro->minparticipantes) ? $registro->minparticipantes : old('minparticipantes'))}}">
            <label class="{{ $errors->has('minparticipantes') ? 'red-text' : '' }}">Mínimo de Participantes</label>
            @if($errors->has('minparticipantes'))
                    <span class="invalido-form">
                       {{$errors->first('minparticipantes')}}
                    </span>
            @endif
        </div>
        <div class="input-field col s6">
            <input type="number" name="maxparticipantes" class="validate" value="{{(isset($registro->maxparticipantes) ? $registro->maxparticipantes : old('maxparticipantes'))}}">
            <label class="{{ $errors->has('maxparticipantes') ? 'red-text' : '' }}">Máximo de Participantes</label>
            @if($errors->has('maxparticipantes'))
                    <span class="invalido-form">
                       {{$errors->first('maxparticipantes')}}
                    </span>
            @endif
        </div>
    </div>
    
    </div>
