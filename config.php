<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$bd = "coffeezinho";

//CONEXÃO ESTRUTURAL

$conn = mysqli_connect($localhost, $user, $pass, $bd);

$sql = mysqli_query($conn, "SELECT * FROM usuario");

echo "Existem " .mysqli_num_rows($sql). " registros.";


?>