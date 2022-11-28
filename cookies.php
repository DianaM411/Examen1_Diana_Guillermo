<?php
    include("sesiones.php");
    include("cabecera.php");
    //session_start(); 
    if(isset($_COOKIE["ultimaConexion"])){
        echo "<p>Ultima conexion".$_COOKIE["ultimaConexion"]."</p>";
    }
    if(isset($_COOKIE["sistemaOperativo"])){
        echo "<p>Sistema operativo".$_COOKIE["tipoSistemaOperativo"]."</p>";
    }
    if(isset($_COOKIE["posicion"])){
        echo "<p>Localizacion".$_COOKIE["posicion"]."</p>";
    }
    if(isset($_COOKIE["navegador"])){
        echo "<p>Tipo de navegador".$_COOKIE["tipoNavegador"]."</p>";
    }
?>
