<?php
    setcookie("ultimaConexion", "", time() - 3600); 
    setcookie("sistemaOperativo", "", time() - 3600); 
    setcookie("posicion", "", time() - 3600); 
    setcookie("navegador", "", time() - 3600); 
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php");
?>