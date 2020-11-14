<?php 

include("BaseDatos.php");

$idEliminar = ($_GET["id"]);
$transaccion = new BaseDatos();

$consultaSQL = "DELETE FROM producto WHERE idProducto='$idEliminar'";

$transaccion->eliminarDatos($consultaSQL);

header("location:index.php");
?>