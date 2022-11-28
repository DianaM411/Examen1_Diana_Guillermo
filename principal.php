<?php 
//session_start(); 
//if(!(isset($_SESSION['username']))){
  //header("location:login.php");
//}
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

  <div>
    <?php
    require_once('cabecera.php');
    ?>
  </div>

  <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $cuantasPreguntas = ($_POST["cuantasPreguntas"]);
      $adivinoEdad = 0;

      if(!empty($_POST['mayorEdad'])) {
        $respuesta=$_POST['mayorEdad'];
        if ($respuesta === "si"){
          //echo "Es mayor de edad";
          for ($x = 0; $x < $cuantasPreguntas; $x++) {
           //do {
              $respuesta = "no";
              $adivinoEdad = rand(18,120);
              echo "Tu edad es ".$adivinoEdad."?";
            //} while ($respuesta === "no");
        }
        }
        else {
          //echo "Es menor de edad";
          for ($x = 0; $x < $cuantasPreguntas; $x++) {
          $adivinoEdad = rand(0,17);
          echo "Tu edad es ".$adivinoEdad."?";
        }
        }
      }
    }
?>
  <h1>Adivino tu edad</h1>
  <!--Formulario-->  
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