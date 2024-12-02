<?php

if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

$localhost = "localhost";
$user = "root";
$pass = "";
$bd = "coffeezinho";

global $pdo;

//CONEXÃO ORIENTADA A OBJETOS

try{
    $pdo = new PDO("mysql:dbname=".$bd."; host=".$localhost, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>