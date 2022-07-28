<?php
require_once("banco.php");



//CARRO
class CadastroClient extends Banco {

    private $nome;
    private $telefone;
    private $email;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }

    public function incluir(){
        return $this->setClient($this->getNome(),$this->getTelefone(),$this->getEmail());
    }
}
?>