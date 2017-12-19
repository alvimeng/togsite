<div class="input-field">
	<input type="text" name="name" class="validade" value="{{ isset($usuario->name) ? $usuario->name : '' }}">
	<label>Nome</label>
</div>

<div class="input-field">
	<input type="text" name="lastname" class="validade" value="{{ isset ($usuario->lastname) ? $usuario->lastname : ''}}">
	<label>Sobrenome</label>
</div>
<div class="input-field">
	<input type="text" name="email" class="validade" value="{{ isset($usuario->email) ? $usuario->email : '' }}">
	<label>E-mail</label>
</div>

<div class="input-field">
	<input type="password" name="password" class="validade">
	<label>Senha</label>
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