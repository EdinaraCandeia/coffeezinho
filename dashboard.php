<?php
session_start();

if(empty($_SESSION)){
    print "<script>location.href='pagina_login.php';</script>";
}
?>

<h1>Deseja adicionar mais itens à compra?</h1> 
<h1>Deseja finalizar a compra?</h1>