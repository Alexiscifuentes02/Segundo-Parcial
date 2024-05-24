<?php 
class PartidoFutbol extends Partido{
    private $coef_Menores;
    private $coef_Juveniles;
    private $coef_Mayores;

    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2){
        parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
        $this->coef_Menores = 0.13;
        $this->coef_Juveniles = 0.19;
        $this->coef_Mayores = 0.27;
    }



    public function getCoefMenores(){
        return $this->coef_Menores;
    }

    public function getCoefJuveniles(){
        return $this->coef_Juveniles;
    }

    public function getCoefMayores(){
        return $this->coef_Mayores;
    }


    public function setCoefMenores($coefMen){
        $this->coef_Menores = $coefMen;
    }

    public function setCoefJuveniles($coefJuv){
        $this->coef_Juveniles = $coefJuv;
    }

    public function setCoefMayores($coefMay){
        $this->coef_Mayores = $coefMay;
    }


    public function __toString(){
        $cadena = parent::__toString();
        return $cadena. " Coeficientes Menores: " .$this->getCoefMenores()."\n" .
        " Coeficientes Juveniles: " . $this->getCoefJuveniles()." Coeficientes Mayores: ".$this->getCoefMayores()."\n";
    }



    public function retornaCoeficiente(){
        $categoria = $getNombre()
}