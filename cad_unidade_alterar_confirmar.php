<?php 
include_once "conexao.php";

$uni_unidade = $_POST['uni_unidade'];
$uni_descricao = $_POST['uni_descricao'];

$sqlAlterar = "UPDATE CAD_UNIDADE SET UNI_DESCRICAO = '$uni_descricao' WHERE UNI_UNIDADE = '$uni_unidade'";

$sql= $con->query($sqlAlterar);

header("location: cad_unidade.php?msg=mensagemUnidadeAlterar");
?>