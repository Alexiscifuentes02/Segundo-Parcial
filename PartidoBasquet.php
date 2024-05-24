<?php 
class PartidoBasquet extends Partido{
    private $cantInfracciones;
    private $coefPenalizacion;

    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2,$infracciones){
        parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
        $this->cantInfracciones = $infracciones;
        $this->coefPenalizacion = 0.75;
    }

    public function getInfracciones(){
        return $this->cantInfracciones;
    }

    public function getPenalizacion(){
        return $this->coefPenalizacion;
    }

    public function setInfracciones($infracciones){
        $this->cantInfracciones = $infracciones;
    }

    public function setPenalizacion($coef){
        $this->coefPenalizacion = $coef;
    }

    public function __toString(){
        $cadena = parent::__toString();
        return $cadena. " Cant Infracciones: " .$this->getInfracciones()."\n" .
        " Coeficiente Penalizacion: " . $this->getPenalizacion()."\n";
    }




}