<?php 

class BaseDatos {

    public $usuarioBD = "root";
    public $passwordBD = "";

    public function __construct(){

    }

    public function conectarBD(){

        try {

            $datosBD = "mysql:host=localhost;dbname=tienda";
            $conexionBD = new PDO($datosBD,$this->usuarioBD, $this->passwordBD);

            return ($conexionBD);

        } catch (PDOException $error) {
            
            echo($error->getMessage());
        }
    }

    public function agregarDatos($consultas){

        $conexionBD = $this->conectarBD();
        $insertarDatos = $conexionBD->prepare($consultas);
        $resultado = $insertarDatos->execute();

        if ($resultado) {
            echo("Producto agregado con éxito");
        } else {
            echo("El producto no pudo ser agregado");
        }
    }

    public function consultarDatos($consultaSQL){
        $conexionBD = $this->conectarBD();
        $consultarDatos = $conexionBD->prepare($consultaSQL);
        $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);
        $consultarDatos->execute();

        return ($consultarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL){
        $conexionBD = $this->conectarBD();
        $eliminarDatos = $conexionBD->prepare($consultaSQL);
        $resultado = $eliminarDatos->execute();
    

        if ($resultado) {
            echo('Producto eliminado satisfactoriamente');
        } else {
            echo('No se pudo eliminar el producto');
        }
    }

    public function editarDatos($consultaSQL){
        $conexionBD = $this->conectarBD();
        $editarDatos = $conexionBD->prepare($consultaSQL);
        $resultado = $editarDatos->execute();
    

        if ($resultado) {
            echo('Producto editado satisfactoriamente');
        } else {
            echo('No se pudo editar el producto');
        }
    }
    

}
?>