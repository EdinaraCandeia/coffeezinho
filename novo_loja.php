<div class="card" id="tipo1">
        <div class="row">
            <div class="col">
            <h1>Novo Usuário</h1>
            </div>
        </div>
    <div class="row m-3 justify-content-center">
    <div class="col">
    <form action="?page=salvar" method="POST">
<input type="hidden" name="acao" value="novo2">
    <div class="row">
    <div class="col-sm-3 m-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="col-sm-3 m-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="col-sm-3 m-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    </div>
    <div class="row">
    <div class="col-sm-3 m-3">
        <label>CNPJ</label>
        <input type="text" name="cnpj" class="form-control">
    </div>
    <div class="col-sm-3 m-3">
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control">
    </div>
    </div>
    <div class="row">
        <label class="m-3">Endereço</label>
        <div class="col-sm-3 m-3">
            <input type="text" name="logradouro" class="form-control" placeholder="Logradouro">
        </div>
        <div class="col-sm-3 m-3">
            <input type="number" name="numero" class="form-control" placeholder="Número casa/lote/apartamento">
        </div>
        <div class="col-sm-3 m-3">
        <input type="text" name="cidade" class="form-control" placeholder="Cidade">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 m-3">
            <input type="text" name="estado" class="form-control" placeholder="Estado - UF">
        </div>
            <div class="col-sm-3 m-3">
            <input type="number" name="cep" class="form-control" placeholder="CEP">
        </div>
    </div>
    <div class="m-3">
    <button type="submit" class="btn btn-primary" value="Enviar" name="CadUsuarioLoja">Enviar</button>
    </div>
</form>
    </div>





