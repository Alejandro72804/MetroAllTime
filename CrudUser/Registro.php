<!DOCTYPE PHP>
<?php
try {
include_once("./conecta.php");
$con= conectar();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$contrasena = $_POST["contrasena"]; 
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];

$sql = "INSERT INTO usuarios VALUES ($nombre,'$apellido',$contrasena,'$correo',$telefono,'$direccion')";
$query = mysqli_query($con, $sql) or die("No se pudo ingresar el registro");

if ($query) {
    Header("Location: /index.php");
}

} catch (Exception $e) {
    echo $e->getMessage();
}
?>
