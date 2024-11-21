<?php
session_start();

if(empty($_SESSION)){
    print "<script>location.href='pagina_login.php';</script>";
}
?>