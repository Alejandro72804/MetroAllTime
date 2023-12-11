<!DOCTYPE PHP>
<?php
<<<<<<< HEAD
include_once("./conecta.php");
=======
include_once("./conexion.php");
>>>>>>> 01f1937853b28c798ac04396edf1cd31bc5f3b41
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
<<<<<<< HEAD
    Header("Location: ./index.php");
}
?>

=======
    Header("Location: ./index.html");
}
?>
>>>>>>> 01f1937853b28c798ac04396edf1cd31bc5f3b41
