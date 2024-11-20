<?php
  /*  define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'coffeezinho');

    $conn = new mysqli(HOST, USER, PASS, BASE);*/

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "coffeezinho";

    try{
        $conn = new PDO("mysql:host=$host;dbname="  . $dbname, $user, $pass);
        
    }catch(PDOException $err){
        echo "Erro na conexão com o banco de dados" . $err->getMessage();
    }
?>