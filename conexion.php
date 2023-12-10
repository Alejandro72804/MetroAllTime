<!DOCTYPE PHP>
function conectar(){
    
//Credenciales
$host= "34.130.205.158";
$user="master";
$pass="prueba";
$bd="MetroAllTime";

//crea conexion
$conexion = new mysqli($host, $user, $pass, $bd);

// Verifica la conexión
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);

return $conexion;
}