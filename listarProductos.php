<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Productos</title>
</head>

<body>

    <?php 

        include("BaseDatos.php");

        $transaccion = new BaseDatos();

        $consultaSQL = "SELECT * FROM producto";

        $productos = $transaccion->consultarDatos($consultaSQL);

    ?>
    <main>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Tienda Los Ninjasos </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Agregar Producto </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="listarProductos.php">Listar Productos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="container mt-5">
            <h1 class="text-center m-5">LISTA DE PRODUCTOS</h1>
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach($productos as $producto):?>
                <div class="col mb-4">
                    <div class="card">
                        <img src="
                                <?php echo($producto["imagenProducto"]) ?>
                            " alt=" <?php echo($producto["nombreProducto"]) ?>" />
                        <div class="card-body">
                            <h3 class="card-title">
                                <?php echo($producto["nombreProducto"]) ?>
                            </h3>
                            <h4 class="card-title">
                                <?php echo($producto["marcaProducto"]) ?>
                            </h4>
                            <p class="card-text">
                                <?php echo($producto["precioProducto"]) ?>
                            </p>
                            <p class="card-text">
                                <?php echo($producto["descripcionProducto"]) ?>
                            </p>
                            <a href="eliminarProducto.php?id=<?php echo($producto["idProducto"])?> "
                                class="btn btn-danger" name="botonEliminar">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#editar<?php echo($producto["idProducto"])?>">
                                Editar
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición del Producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProducto.php?id=<?php echo($producto['idProducto'])?>"
                                        method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="col-sm-6 col-md-6 mb-3">
                                                <label>Nombre del Producto</label>
                                                <input type="text" class="form-control" name="nombreProducto"
                                                    value="<?php echo($producto['nombreProducto'])?>">
                                            </div>
                                            <div class="col-sm-6 col-md-6 mb-3">
                                                <label>Marca del producto</label>
                                                <input type="text" class="form-control" name="marcaProducto"
                                                    value="<?php echo($producto['marcaProducto'])?>">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="col-sm-12 col-md-12 mb-3">
                                                <label>Precio Producto</label>
                                                <input type="text" class="form-control" name="precio"
                                                    value="<?php echo($producto['precioProducto'])?>">
                                            </div>
                                        </div>
                                        <div class="form-group justify-content-center">
                                            <label>Descripción</label>
                                            <textarea class="form-control col-md-12 col-md-6 m-auto" name="descripcion"
                                                rows="3"><?php echo($producto['descripcionProducto'])?></textarea>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="col-sm-12 col-md-12 mb-3">
                                                <label>Foto Producto</label>
                                                <input type="text" class="form-control" name="foto"
                                                    value="<?php echo($producto['imagenProducto'])?>">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success" name="botonEditar">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>