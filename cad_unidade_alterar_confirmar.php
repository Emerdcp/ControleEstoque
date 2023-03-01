<?php 
include_once "conexao.php";

$uni_unidadeC = $_POST['uni_unidade'];
$uni_descricaoC = $_POST['uni_descricao'];

$sqlAlterarC = "UPDATE CAD_UNIDADE SET UNI_DESCRICAO = '$uni_descricaoC'";

header("location: cad_unidade.php?msg=mensagemUnidadeAlterar");
?>