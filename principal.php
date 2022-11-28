<?php include("sesiones.php");?>
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
    require('cabecera.php');
    $numeroPregunta=0;
    $cuantasPreguntas = $_SESSION["numeroPreguntas"];
    $base=18;
    $techo=120;
    if($_SESSION["numeroPreguntas"]>$_SESSION["numeroPregunta"]){
        if(isset($_POST['edad'])){
            if($_POST['edad']=="correcto"){
                $_SESSION["resultado"]="correcto";
                header("Location: inicio.php");
            }
        }
        if ($_SESSION["mayorEdad"] === "si"){
            $adivinoEdad = rand($base,$techo);
            if(isset($_POST['edad_mayor'])){
                    $base=$_POST['edad_mayor'];
                    $adivinoEdad = rand($base,$techo);
            }
            if(isset($_POST['edad_menor'])){
                    $techo=$_POST['edad_menor'];
                    $adivinoEdad = rand($base,$techo);
                
            } 
            echo "<p>Tu edad es ".$adivinoEdad."?</p>";
            echo"<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
            echo "<input type='radio' name='edad' value='correcto'><label>Correcto</label></br>";
            echo "<input type='radio' name='edad_mayor' value='".$adivinoEdad."'><label>Mayor</label></br>";
            echo "<input type='radio' name='edad_menor' value='".$adivinoEdad."'><label>Menor</label></br>";
            echo "<input type='submit' value='Siguiente'>";
            echo"</form>";
            $_SESSION["numeroPregunta"] = ($_SESSION["numeroPregunta"] +1); 
        }else{
            $base=0;
            $techo=18;
            $adivinoEdad = rand($base,$techo);
            if(isset($_POST['edad_mayor'])){
                    $base=$_POST['edad_mayor'];
                    $adivinoEdad = rand($base,$techo);
            }
            if(isset($_POST['edad_menor'])){
                    $techo=$_POST['edad_menor'];
                    $adivinoEdad = rand($base,$techo);
                
            } 
            echo "<p>Tu edad es ".$adivinoEdad."?</p>";
            echo"<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
            echo "<input type='radio' name='edad' value='correcto'><label>Correcto</label></br>";
            echo "<input type='radio' name='edad_mayor' value='".$adivinoEdad."'><label>Mayor</label></br>";
            echo "<input type='radio' name='edad_menor' value='".$adivinoEdad."'><label>Menor</label></br>";
            echo "<input type='submit' value='Siguiente'>";
            echo"</form>";
            $_SESSION["numeroPregunta"] = ($_SESSION["numeroPregunta"] +1); 
        }
    }else{
        $_SESSION["resultado"]="incorrecto";
        header("Location: inicio.php");
    }

?>
</body>
</html>
