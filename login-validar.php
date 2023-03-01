<?php 
$usuario = $_POST['fun_email'];
$senha = $_POST['fun_senha'];

include_once "conexao.php";

$sqlvalidar = "SELECT * FROM CAD_FUNCIONARIO WHERE FUN_EMAIL = '$usuario' AND FUN_SENHA = '$senha'";

$validarDados = $con->query($sqlvalidar);

$data = $validarDados->fetchAll(PDO::FETCH_ASSOC);         //Usar sempre que tiver um select
//var_dump($data);
if($validarDados->rowCount() > 0){
    session_start();
    $_SESSION["fun_email"] = $usuario;
    header("location: index.php");
}else{
    header("location:login.php?msg=mensagemUsuarioInvalido");
}
?>