<?php 
$msg = $_GET['msg'] ?? "";

if($msg == "mensagemUsuarioInvalido"){
    echo "<div class'alert alert-info'>Usuário ou Senha Inválido!</div>";
}
?>