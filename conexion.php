<!DOCTYPE PHP>
<?php
function conectar(){
    //Credenciales
    $host = "34.130.205.158";
    $user = "master";
    $pass = "prueba";
    $bd = "MetroAllTime";

    //crea conexion
    $con = mysqli_connect($host, $user, $pass);
    mysqli_select_db($con, $bd);

    return $con;
}
?>