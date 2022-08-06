<?php
require_once("banco.php");



//RENT
class CadastroRent extends Banco {

    private $idCliente;
    private $idCarro;
    private $dataR;
    private $dataD;
    private $valorR;

    //Metodos Set
    public function setIdCliente($string){
        $this->idCliente = $string;
    }
    public function setIdCarro($string){
        $this->idCarro = $string;
    }
    public function setDataR($string){
        $this->dataR = $string;
    }
    public function setDataD($string){
        $this->dataD = $string;
    }
    public function setValorR($string){
        $this->valorR = $string;
    }
    //Metodos Get
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getIdCarro(){
        return $this->idCarro;
    }
    public function getDataR(){
        return $this->dataR;
    }
    public function getDataD(){
        return $this->dataD;
    }
    public function getValorR(){
        return $this->valorR;
    }

    public function incluir(){
        return $this->setRent($this->getIdCliente(),$this->getIdCarro(),$this->getDataR(),$this->getDataD(),$this->getValorR());
    }
}
?>