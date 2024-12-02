<?php

session_start();

unset($_SESSION['usuario_ID']);

header("Location: login.php");

?>