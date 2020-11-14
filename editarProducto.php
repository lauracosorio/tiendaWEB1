<?php 

include("BaseDatos.php");

$transaccion = new BaseDatos();

if (isset($_POST["botonEditar"])) {
    $id = $_GET["id"];

    $nombre = $_POST["nombreProducto"];
    $marca = $_POST["marcaProducto"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $foto = $_POST["foto"];

    $consultaSQL = "UPDATE producto SET nombreProducto='$nombre', marcaProducto='$marca', precioProducto='$precio', descripcionProducto='$descripcion', imagenProducto='$foto' WHERE idProducto='$id'";

    $transaccion->editarDatos($consultaSQL);

    header("location:listarProductos.php");

}



?>