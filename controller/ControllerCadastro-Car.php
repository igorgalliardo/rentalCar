<?php
require_once("../model/cadastro-car.php");


class cadastroControllerCar{

    private $cadastroCar;

    public function __construct(){
        $this->cadastroCar = new CadastroCar();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastroCar->setNome($_POST['nome_carro']);
        $this->cadastroCar->setModelo($_POST['modelo_carro']);
        $this->cadastroCar->setAno($_POST['ano_carro']);
        $this->cadastroCar->setCor($_POST['cor_carro']);
        $result = $this->cadastroCar->incluir();
        if($result >= 1){
            echo "<script>alert('Carro Cadastrado com sucesso!');document.location='../view/cadastro.php?page_id=car'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroControllerCar();