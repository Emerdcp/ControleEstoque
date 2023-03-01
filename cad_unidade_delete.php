<?php 

include "conexao.php";

$uni_unidade = $_GET['unidade'];

$sqlExcluirUni = "DELETE FROM CAD_UNIDADE WHERE UNI_UNIDADE = '$uni_unidade'";
print_r($sqlExcluirUni);

$sqlExcluirU = $con->query($sqlExcluirUni);

header("location: cad_unidade.php?msg=mensagemUnidadeDelete");
?>