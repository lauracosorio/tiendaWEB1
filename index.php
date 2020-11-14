<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Tienda WEB1</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand  font-weight-bold" href="#">Tienda Los Ninjasos </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link active " href="index.php">Agregar Producto </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="listarProductos.php">Listar Productos</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 input" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <h1 class="text-center mt-5">AGREGAR PRODUCTO</h1>

    <div class="container mt-5">
        <form class="text-center" action="registrarProducto.php" method="POST">
            <div class="form-row justify-content-center">
                <div class="col-sm-6 col-md-3 mb-3">
                    <label>Nombre del Producto</label>
                    <input type="text" class="form-control input" placeholder="Chocolate" name="nombreProducto" required>
                </div>
                <div class="col-sm-6 col-md-3 mb-3">
                    <label>Marca del producto</label>
                    <input type="text" class="form-control input" name="marcaProducto" placeholder="Corona" required>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>Precio Producto</label>
                    <input type="text" class="form-control input" name="precio" required>
                </div>
            </div>
            <div class="form-group justify-content-center">
                <label>Descripción</label>
                <textarea class="form-control col-ms-12 col-md-6 m-auto input" name="descripcion" rows="3"
                    required></textarea>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>Foto Producto (URL)</label>
                    <input type="text" class="form-control input" name="foto">
                </div>
            </div>

            <button class="btn btn-danger" type="submit" name="registrar">Registrar</button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>