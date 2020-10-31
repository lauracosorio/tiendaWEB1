<?php 

include ('BaseDatos.php');

if(isset($_POST["registrar"])){

    $nombre = $_POST["nombreProducto"];
    $marca = $_POST["marcaProducto"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $transaccion = new BaseDatos();

    $consultaSQL = "INSERT INTO producto(nombreProducto, marcaProducto, precioProducto, descripcionProducto) VALUES ('$nombre', '$marca', '$precio', '$descripcion')";

    $transaccion->agregarDatos($consultaSQL);

}

?>