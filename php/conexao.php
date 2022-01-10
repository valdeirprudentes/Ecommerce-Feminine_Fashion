<?php
$servidor = "localhost";
$usuario = "ead";
$senha = "13456";
$banco = "db_ead";

$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>