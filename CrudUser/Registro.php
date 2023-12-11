<!DOCTYPE PHP>
<?php
include_once("./conecta.php");
$con= conectar();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT); 
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];

$sql = "INSERT INTO usuarios VALUES ($nombre,'$apellido',$contrasena,'$correo',$telefono,'$direccion')";
$query = mysqli_query($con, $sql) or die("No se pudo ingresar el registro");

if ($query) {
    Header("Location: ./index.php");
}
?>

