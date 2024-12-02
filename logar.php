<?php

//Verifica os dados

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'configPDO.php';
    require 'usuarioClass.php';

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if(Usuario::login($email, $senha)){
        if(isset($_SESSION['usuario_ID'])){
            header("Location: index.php");
        }else{
            print "erro";
        }

    }else{
        header("Location: login.php");
    }
}else{
    header("Location: login.php");
}

?>