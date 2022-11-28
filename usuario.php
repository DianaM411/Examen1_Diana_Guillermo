<?php
 include("sesiones.php");
 include("cabecera.php");
 //session_start(); 
?>

<p><?php echo $_SESSION["nombreUsuario"] ?></p>
<p><?php echo $_SESSION["correo"] ?></p>