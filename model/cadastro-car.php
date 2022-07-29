<?php
require_once("banco.php");



//CARRO
class CadastroCar extends Banco {

    private $nome;
    private $modelo;
    private $ano;
    private $cor;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setModelo($string){
        $this->modelo = $string;
    }
    public function setAno($string){
        $this->ano = $string;
    }
    public function setCor($string){
        $this->cor = $string;
    }
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getCor(){
        return $this->cor;
    }

    public function incluir(){
        return $this->setCar($this->getNome(),$this->getModelo(),$this->getAno(),$this->getCor());
    }
}
?>