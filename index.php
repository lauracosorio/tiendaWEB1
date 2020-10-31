<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tienda WEB1</title>
</head>
<body>
   <h1 class="text-center mt-5">ADMINISTRACIÓN DE PRODUCTOR</h1> 

    <div class="container mt-5">
        <form class="text-center" action="registrarProducto.php" method="POST" >
            <div class="form-row justify-content-center">
                <div class="col-sm-6 col-md-3 mb-3">
                <label >Nombre del Producto</label>
                <input type="text" class="form-control"  placeholder="Chocolate" name="nombreProducto" required>
                </div>
                <div class="col-sm-6 col-md-3 mb-3">
                <label>Marca del producto</label>
                <input type="text" class="form-control"   name="marcaProducto" placeholder="Corona" required>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-12 col-md-6 mb-3">
                <label >Precio Producto</label>
                <input type="text" class="form-control" name="precio" required>
                </div>
            </div>
            <div class="form-group justify-content-center">
                <label>Descripción</label>
                <textarea class="form-control col-ms-12 col-md-6 m-auto" name="descripcion" rows="3" required></textarea>
            </div>
            
            <button class="btn btn-primary" type="submit" name="registrar">Registrar</button>
        </form>
    </div>

   

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>