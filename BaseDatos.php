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

}
?>