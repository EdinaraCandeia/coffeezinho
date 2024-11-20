<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuario WHERE  usuario_ID=".$_REQUEST["usuario_ID"];
    $res = $conn->query($sql);
   $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="usuario_ID" value="<?php print $row->usuario_ID; ?>">
    <div class="m-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="m-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>
    <div class="m-3">
        <label>Senha</label>
        <input type="password" name="senha" required class="form-control">
    </div>
    <div class="m-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>