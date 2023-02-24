<?php 
$usuario = $_POST['fun_email'];
$senha = $_POST['fun_senha'];

include_once "conexao.php";

$sqlvalidar = "SELECT * FROM CAD_FUNCIONARIO WHERE FUN_EMAIL = '$usuario' AND CAD_SENHA = '$senha'";

$dados = 


?>