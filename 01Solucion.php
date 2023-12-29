
<?php
class Animal{
    // atributos
    private string $sonido;
    private string $alimentos;
    private string $habitat;
    private string $nombreCientifico;
    // functiones
    public function __construct($sonido,$alimentos,$habitat,$nombreCientifico){
        $this->sonido=$sonido;
        $this->alimentos=$alimentos;
        $this->habitat=$habitat;
        $this->nombreCientifico=$nombreCientifico;
    }
    public function getNombreCientifico(){
        return $this->nombreCientifico;
    }
    public function getSonido(){
        return $this->sonido;
    }
    public function getAlimentos(){
        return $this->alimentos;
    }
    public function getHabitat(){
        return $this->habitat;
    }
    public function imprimir(){
        echo "{$this->getSonido()}, {$this->getAlimentos()}, {$this->getHabitat()}, {$this->getNombreCientifico()} <br>";
    }
}
class Canino extends Animal{
    // atributos
    private int $patas;
    // funciones
    public function __construct($sonido,$alimentos,$habitat,$nombreCientifico,$patas){
        parent::__construct($sonido,$alimentos,$habitat,$nombreCientifico);
        $this->patas=$patas;
    }
    public function getPatas(){
        return $this->patas;
    }
    public function imprimir(){
        echo "{$this->getSonido()}, {$this->getAlimentos()}, {$this->getHabitat()}, {$this->getNombreCientifico()}, {$this->getPatas()} <br>";
    }
}
class Perro extends Canino{
    // atributos
    private string $raza;
    // funciones
    public function __construct($sonido,$alimentos,$habitat,$nombreCientifico,$patas,$raza){
        parent::__construct($sonido,$alimentos,$habitat,$nombreCientifico,$patas);
        $this->raza=$raza;
    }
    public function getRaza(){
        return $this->raza;
    }
    public function imprimir(){
        echo "PERRO: {$this->getSonido()}, {$this->getAlimentos()}, {$this->getHabitat()}, {$this->getNombreCientifico()}, {$this->getPatas()}, {$this->getRaza()} <br>";
    }
}
class Lobo extends Canino{
    public function imprimir(){
        echo "LOBO: {$this->getSonido()}, {$this->getAlimentos()}, {$this->getHabitat()}, {$this->getNombreCientifico()}, {$this->getPatas()} <br>";
    }
}
class Felino extends Animal{
    // atributos
    private float $peso;
    // funciones
    public function __construct($sonido,$alimentos,$habitat,$nombreCientifico,$peso){
        parent::__construct($sonido,$alimentos,$habitat,$nombreCientifico);
        $this->peso=$peso;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function imprimir(){
        echo "{$this->getSonido()}, {$this->getAlimentos()}, {$this->getHabitat()}, {$this->getNombreCientifico()}, {$this->getPeso()} <br>";
    }
}
class Leon extends Felino{
    // atributos
    private string $nombre;
    // funciones
    public function __construct($sonido,$alimentos,$habitat,$nombreCientifico,$peso,$nombre){
        parent::__construct($sonido,$alimentos,$habitat,$nombreCientifico,$peso);
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function imprimir(){
        echo "LEON: {$this->getSonido()}, {$this->getAlimentos()}, {$this->getHabitat()}, {$this->getNombreCientifico()}, {$this->getPeso()}, {$this->getNombre()} <br>";
    }
}
class Gato extends Felino{
    public function imprimir(){
        echo "GATO: {$this->getSonido()}, {$this->getAlimentos()}, {$this->getHabitat()}, {$this->getNombreCientifico()}, {$this->getPeso()} <br>";
    }
}
//$animal1=new Animal("sonido","alimentos","habitat","nombreCientifico");
//$animal1->imprimir();
//$canino1=new Canino("sonido","alimentos","habitat","nombreCientifico",4);
//$canino1->imprimir();
$perro1=new Perro("Ladrido","Carnivoro","Domestico","Canis lupus familiaris",4,"Chihuahua");
$perro1->imprimir();
$lobo1=new Lobo("Aullido","Carnívoro","Bosque","Canis lupus",4);
$lobo1->imprimir();
//$felino1=new Felino("sonido","alimentos","habitat","nombreCientifico",4.5);
//$felino1->imprimir();
$leon1=new Leon("Rugido","Carnivoro","Praderas","Panthera leo",50.87,"Alex");
$leon1->imprimir();
$gato1=new Gato("Maullido","Ratones","Doméstico","Felis silvestris catus",9.89);
$gato1->imprimir();
?>