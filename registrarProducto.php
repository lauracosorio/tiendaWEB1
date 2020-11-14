<?php 

include ('BaseDatos.php');

if(isset($_POST["registrar"])){

    $nombre = $_POST["nombreProducto"];
    $marca = $_POST["marcaProducto"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $foto = $_POST["foto"];

    $transaccion = new BaseDatos();

    $consultaSQL = "INSERT INTO producto(nombreProducto, marcaProducto, precioProducto, descripcionProducto, imagenProducto) VALUES ('$nombre', '$marca', '$precio', '$descripcion', '$foto')";

    $transaccion->agregarDatos($consultaSQL);

    header("location:listarProductos.php");

}

?>