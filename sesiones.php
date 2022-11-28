<?php
    session_start(); 
    if (!isset ($_SESSION["nombreUsuario"])){
        header("Location: login.php");
    }
?>