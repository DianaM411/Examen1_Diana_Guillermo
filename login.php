<!DOCTYPE html>
<?php
//si el usuario se logea correctamente se le envia a inicio.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre= $_POST['nombreUsuario'];
    $correo= $_POST['correo'];
    $dominioCorreo=explode("@",basename($correo))[1];
    echo $dominioCorreo;
    if(($nombre=="guillermo") && ($dominioCorreo=="educa.madrid.org")){
        session_start(); 
        $_SESSION["nombreUsuario"]= $nombre;
        $_SESSION["correo"]= $correo;
        header("Location: inicio.php");
    }else{
        header("Location: login.php");
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Guillermo">
    <meta name="description" content="texto de descripcion">
    <meta name="keywords" content="palabras,clave">
    <title>Examen DES</title>
<script>
    let posicion= navigator.geolocation;
    let navegador= navigator.userAgent;
    let sistemaOperativo=navigator.appVersion;
    let tiempo = new Date();
    tiempo.setTime(tiempo.getTime() + (60 * 60 * 1000));
    let expires = "expires="+tiempo.toUTCString();
    document.cookie = "ultimaConexion=" + tiempo + ";" + expires + ";path=/";
    document.cookie = "posicion=" + posicion + ";" + expires + ";path=/";
    document.cookie = "navegador=" + navegador + ";" + expires + ";path=/";
    document.cookie = "sistemaOperativo=" + sistemaOperativo + ";" + expires + ";path=/";

/*    te hemos intentado sacar la longitud y la latitud con el geolocation. No hemos sabido
      pero esta es la ruta correcta
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(checkPosition, function(msg){
        console.error( msg );
    });
    function checkPosition(position) {
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        console.log(lat);
        console.log(long);
    }  */


</script>
</head>
<body>
    
    <h1>Login</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="valor2">Nombre de usuario</label>
        <input type="text" name="nombreUsuario" placeholder="Escriba su nombre" required>
        <input type="text" name="correo" placeholder="Escriba su correo" required>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php
    if(isset($_COOKIE["ultimaConexion"])){
        echo "<p>Ultima conexion ".$_COOKIE["ultimaConexion"]."</p>";
    }
    if(isset($_COOKIE["sistemaOperativo"])){
        echo "<p>Sistema operativo ".$_COOKIE["sistemaOperativo"]."</p>";
    }
    if(isset($_COOKIE["posicion"])){
        echo "<p>Localizacion ".$_COOKIE["posicion"]."</p>";
    }
    if(isset($_COOKIE["navegador"])){
        echo "<p>Tipo de navegador ".$_COOKIE["navegador"]."</p>";
    }
    ?>

    
</body>
</html>

