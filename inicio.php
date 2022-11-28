<?php 
include("sesiones.php");
require('cabecera.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["numeroPreguntas"] = $_POST["cuantasPreguntas"];
    $_SESSION["mayorEdad"]=$_POST['mayorEdad'];
    $_SESSION["numeroPregunta"]=0;
    header("Location: principal.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Pricipal</title>
</head>

<body>
<?php
if (isset($_SESSION["resultado"])){
    if($_SESSION["resultado"] =="correcto"){echo "<h1>Hemos acertado</h1>";}
    if($_SESSION["resultado"] =="incorrecto"){echo "<h1>Hemos fallado</h1>";}
    unset($_SESSION["resultado"]);
}
?>
<h1>Adivino tu edad</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
      <label for="mayorEdad">Eres mayor de edad?</label><br>
    
      <input type="radio" name="mayorEdad"" value="si" required/>
      <label for="mayorEdad">Si</label><br>
      
      <input type="radio" name="mayorEdad"" value="no" required/>
      <label for="mayorEdad">No</label><br>
      
      
      <label for="cuantasPreguntas">En cuantas preguntas se va a adivinar la edad? De 1 a 10</label><br>
      <input type="number" name="cuantasPreguntas" step="1" min="1" max="10" required/><br>
     
      <input type="submit" value="Jugar"/> <br>
      <hr>
</form>
</body>
</html> 