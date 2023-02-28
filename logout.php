<?php 
session_start();

session_destroy();//para sair no log da página

header("location: login.php");
?>