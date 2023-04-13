<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "registro_usuarios";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
    die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM chat_login WHERE Email = '".$nombre."' and contrasenia='".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    header("Location: /public/index.html");
}
else if ($nr == 0)
{
    echo '<script>alert("no se encontró coincidencia del usuaro o el password en la base de datos, por favor intentelo nuevamente  ")</script>';    
    header("Location:login.html");
}
    
?>


