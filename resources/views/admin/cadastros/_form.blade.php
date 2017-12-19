<div class="col m4">
    <div class="row" style="margin-top:25px">	
	<div class="col m12 s12">
	@if(isset($usuario->imagem))
		<img width="250" src="{{ asset($usuario->imagem) }}">
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
        <h4>Dados Pessoais</h4>
        <div class="input-field col s6">
            <input type="text" name="name" class="validate" value="{{(isset($usuario->name) ? $usuario->name : '')}}">
            <label>Nome:</label>
        </div>
        <div class="input-field col s6">
            <input type="text" name="lastname" class="validate" value="{{(isset($usuario->lastname) ? $usuario->lastname : '')}}">
            <label>Sobrenome:</label>
        </div>
        
    </div>
    <div class="row">
        <div class="input-field col s6">
        <div class="input-field">
            <input type="number" name="cpf" class="validate" value="{{(isset($usuario->cpf) ? $usuario->cpf : '')}}">
            <label>CPF:</label>
        </div>  
        </div>
    </div>
    
    <div class="row">
        <h4>Dados para Contato</h4>
        <div class="input-field col s6">
            <input type="number" name="phone" class="validate" value="{{(isset($usuario->phone) ? $usuario->phone : '')}}">
            <label>Telefone para contato</label>
        </div>
        <div class="input-field col s6">
            <input type="number" name="cep" class="validate" value="{{(isset($usuario->cep) ? $usuario->cep : '')}}">
            <label>CEP</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
        <div class="input-field">
            <input type="text" name="rua" class="validate" value="{{(isset($usuario->rua) ? $usuario->rua : '')}}">
            <label>Rua</label>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <div class="input-field">
                <input type="text" name="numero" class="validate" value="{{(isset($usuario->numero) ? $usuario->numero : '')}}">
                <label>Número</label>
            </div>
        </div>
        <div class="input-field col s6">
            <div class="input-field">
                <input type="text" name="complemento" class="validate" value="{{(isset($usuario->complemento) ? $usuario->complemento : '')}}">
                <label>Complemento</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s8">
            <div class="input-field">
                <input type="text" name="cidade" class="validate" value="{{(isset($usuario->cidade) ? $usuario->cidade : '')}}">
                <label>Cidade</label>
            </div>
        </div>
        <div class="input-field col s4">
            <div class="input-field">
                <input type="text" name="estado" class="validate" value="{{(isset($usuario->estado) ? $usuario->estado : '')}}">
                <label>Estado</label>
            </div>
        </div>
    </div>
    <button class="btn light-green darken-2">atualizar cadastro</button>
</div>
