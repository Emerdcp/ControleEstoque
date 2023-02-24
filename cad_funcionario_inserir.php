<?php 
$fun_nome = $_POST['fun_nome'];
$fun_email = $_POST['fun_email'];
$fun_senha = $_POST['fun_senha'];
$fun_status = $_POST['fun_status'];

include_once "conexao.php";

$sqlIncluirFun = "INSERT INTO CAD_FUNCIONARIO(FUN_NOME, FUN_EMAIL, FUN_SENHA, FUN_STATUS) 
                  VALUES('$fun_nome', '$fun_email', '$fun_senha', '$fun_status')";

$incluirFun = $con->query($sqlIncluirFun);

header("location: cad_funcionario.php?msg=FuncionarioCadastrado");
?>