<?php 
session_start();

if(!isset($_SESSION['id'])){
    header('Location:/siakad_averros/pages/auth/signin.php');
}


?>