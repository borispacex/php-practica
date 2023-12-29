<?php
class Singleton{
    private static $instancia;
    private $conexion;
    private function __construct(){
        try {
            $dns = "mysql:host=localhost;dbname=cursounivalle";
            $usuario = "root";
            $clave = "";
            $this->conexion = new PDO($dns,$usuario,$clave);
            $this->conexion->exec("SET CHARACTER SET utf8");
            echo "Conexion exitosa <br>";
        } catch (PDOException $e) {
            echo "Error de conexion: ".$e->getMessage()."<br>";
            die();
        }
    }
    public function prepare($sql){
        return $this->conexion->prepare($sql);
    }
    public static function singleton_conexion(){
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
     // Evita que el objeto se pueda clonar
    public function __clone(){
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
}
echo "SINGLETON<br>";
//Lectura de usuario
$conexion = Singleton::singleton_conexion();
try{
    $consulta = $conexion->prepare("select * from personas");
    $consulta->execute();
    $resultados = $consulta->fetchAll();
    foreach($resultados as $d){
        echo "{$d['id']} , {$d['paterno']}, {$d['materno']}, {$d['nombre']}, {$d['direccion']}<br> ";
    }
}catch(PDOException $e){
    echo "Error al obtener personas <br>";
}
?>