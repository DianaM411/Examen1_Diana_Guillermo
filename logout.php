<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cerrar Session</title>
</head>
<body>
<?php 
session_start();
if(isset($_SESSION['name'])){
session_destroy();}
echo "Has cerrado la session.";
?>
<a href="login.php">Vuelve a la pagina de Login</a>
</body>
</html>