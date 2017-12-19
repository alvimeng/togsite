<div class="row">
    <div class="col m6">
        <div class="input-field">
            <input type="text" name="empresa" class="validade" value="{{ isset($registro->empresa) ? $registro->empresa : '' }}">
            <label>Nome da Empresa</label>
        </div>
    </div>
    <div class="col m6">
        <div class="input-field">
            <input type="number" name="cnpj" class="validade" value="{{ isset($registro->cnpj) ? $registro->cnpj : '' }}">
            <label>CNPJ</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m12">
        <div class="input-field">
            <input type="text" name="endereco" class="validade" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}">
            <label>Endereço Completo</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m6">
        <div class="input-field">
            <input type="text" name="telefone" class="validade" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
            <label>Telefone para Contato</label>
        </div>
    </div>
    <div class="col m6">
        <div class="input-field">
            <input type="email" name="email" class="validade" value="{{ isset($registro->email) ? $registro->email : '' }}">
            <label>E-mail</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m6">
        <div class="input-field">
            <input type="text" name="responsavel" class="validade" value="{{ isset($registro->responsavel) ? $registro->responsavel : '' }}">
            <label>Responsável pela Empresa</label>
        </div>
    </div>
</div>