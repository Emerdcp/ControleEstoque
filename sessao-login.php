<?php 
session_start();
if(!isset($_SESSION['fun_email'])){
    header("location: login.php");
}
?>