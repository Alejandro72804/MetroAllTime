<?php
require_once("../Vista/Superior.php");
$con = conectar();

$ID = $_GET['ID'];
$sql = "SELECT * FROM Comprador WHERE ID='$ID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<div class="content">
    <div class="container mt-3">
        <h1>Actualizar Informacion</h1>
        <form action="CompUpdate.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $row['ID']  ?>">
            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
            <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo" value="<?php echo $row['Correo']  ?>">
            <input type="text" class="form-control mb-3" name="Contraseña" placeholder="Contraseña" value="<?php echo $row['Contraseña']  ?>">
            <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']  ?>">
            <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>">
            
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <th><a href="../Paginas/PagCompra.php" class="btn btn-outline-danger" type="submit">Cancelar</a></th>
        </form>
    </div>
</div>
<?php
require_once("../Vista/Inferior.php");
?>