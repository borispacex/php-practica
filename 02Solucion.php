
<?php
class ObjetoInerte{

}
class Actor{
    private string $vestimenta;
    public function __construct($vestimenta){
        $this->vestimenta=$vestimenta;
    }
    public function getVestimenta(){
        return $this->vestimenta;
    }
}
class Persona extends Actor{
    private string $nombre;
    public function __construct($vestimenta,$nombre){
        parent::__construct($vestimenta);
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
}
class Profesor extends Persona{
    private string $cargo;
    public function __construct($vestimenta,$nombre,$cargo){
        parent::__construct($vestimenta,$nombre);
        $this->cargo=$cargo;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function imprimir(){
        echo "PROFESOR: {$this->getVestimenta()}, {$this->getNombre()}, {$this->getCargo()} <br>";
    }
}
class Estudiante extends Persona{
    private string $curso;
    public function __construct($vestimenta,$nombre,$curso){
        parent::__construct($vestimenta,$nombre);
        $this->curso=$curso;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function imprimir(){
        echo "ESTUDIANTE: {$this->getVestimenta()}, {$this->getNombre()}, {$this->getCurso()} <br>";
    }
}
class Vehiculo extends Actor{
    private string $dueno;
    private int $puertas;
    private int $ruedas;
    public function __construct($dueno,$puertas,$ruedas){
        $this->dueno=$dueno;
        $this->puertas=$puertas;
        $this->ruedas=$ruedas;
    }
    public function getDueno(){
        return $this->dueno;
    }
    public function getPuertas(){
        return $this->puertas;
    }
    public function getRuedas(){
        return $this->ruedas;
    }
}
class Coche extends Vehiculo{
    private bool $descapotable;
    public function __construct($dueno,$puertas,$ruedas,$descapotable){
        parent::__construct($dueno,$puertas,$ruedas);
        $this->descapotable=$descapotable;
    }
    public function getDescapotable(){
        return $this->descapotable;
    }
    public function imprimir(){
        echo "COCHE: {$this->getDueno()}, {$this->getPuertas()}, {$this->getRuedas()}, {$this->getDescapotable()} <br>";
    }
}
class Bicicleta extends Vehiculo{
    private int $nroVelocidades;
    public function __construct($dueno,$puertas,$ruedas,$nroVelocidades){
        parent::__construct($dueno,$puertas,$ruedas);
        $this->nroVelocidades=$nroVelocidades;
    }
    public function getNroVelocidades(){
        return $this->nroVelocidades;
    }
    public function imprimir(){
        echo "BICICLETA: {$this->getDueno()}, {$this->getPuertas()}, {$this->getRuedas()}, {$this->getNroVelocidades()} <br>";
    }
}
$estudiante1=new Estudiante("uniforme","Carlos Suarez","Primaria");
$estudiante1->imprimir();
$profesor1=new Profesor("traje","Roberto Gomez","Ciencias Sociales");
$profesor1->imprimir();
$coche1=new Coche("Boris Vargas",5,4,true);
$coche1->imprimir();
$bicicleta1=new Bicicleta("Juan Perez",0,2,21);
$bicicleta1->imprimir();
?>
