<?php 
class Torneo{
	private $arrayPartidos;
    private $importePremio;


    //CONSTRUCTOR
    public function __construct($premio){
        $this->arrayPartidos = [];
        $this->importePremio =$premio;
    }

    // Metodos GET de la clase Torneo
    public function getPartidos(){
        return $this->arrayPartidos;
    }

    public function getPremios(){
        return $this->importePremio;
    }

    // Metodos SET de la clase Torneo
    public function setPartidos($colPartidos){
        $this->arrayPartidos = $colPartidos ;
    }

    public function setPremios($premio){
        $this->importePremio = $premio;
    }


    // Metodo que muestra la informacion de la clase Torneo
    public function __toString(){
        return "Partidos:\n".$this->mostrarPartidos()."\n".
                "Importe:\n".$this->getPremios()."\n"; 
    }

    // Metodo que muestra la coleccion de partidos
    public function mostrarPartidos(){
        $cadena = "";
        $partidos = $this->getPartidos();
        for($i=0;$i<count($partidos);$i++){
            $unPartido = $partidos[$i];
            $cadena = $cadena . $unPartido . "\n";
        }
        return $cadena;
    }

    public function ingresarPartido($objEquipo1,$objEquipo2,$fecha,$tipoPartido){
        $cantGolesE1 = 0;
        $cantGolesE2 = 0;
        $posiblePartido = new Partido($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);

    }

    public function darGanadores($deporte){
        $colPartidos = $this->getPartidos();
        for($i=0;$i<count($colPartidos);$i++){
            $unPartido = $colPartidos[$i];

        }
    }



}