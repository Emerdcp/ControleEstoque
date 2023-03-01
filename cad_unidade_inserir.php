<?php
$uni_unidade = $_POST['uni_unidade'];
$uni_descricao = $_POST['uni_descricao'];

include_once "conexao.php";

$slqIncluirUni = "INSERT INTO CAD_UNIDADE(UNI_UNIDADE, UNI_DESCRICAO) VALUES('$uni_unidade', '$uni_descricao')";

$incluirUni = $con->query($slqIncluirUni);

header("location: cad_unidade.php?msg=mensagemUnidade");

?>