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
$nom=$_POST['registro_nom'];
$cell=$_POST['registro_cell'];
$nombre=$_POST['registro_usu'];
$pass=$_POST['registro_contra'];



$sql="INSERT INTO chat_login (nombre, telefono, Email, Contrasenia) VALUES ('$nom','$cell','$nombre','$pass')";
if (mysqli_query($conn, $sql)) {
    echo "Felicidades Conexion Exitosa!!";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>