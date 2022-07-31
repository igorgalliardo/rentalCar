<?php
require_once("../model/banco.php");

class editarControllerCar {

    private $editar;
    private $idCarro;
    private $nome;
    private $modelo;
    private $ano;
    private $cor;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaCar($id);
        $this->idCarro      =$row['id_carro'];
        $this->nome         =$row['nome_carro'];
        $this->modelo       =$row['modelo_carro'];
        $this->ano          =$row['ano_carro'];
        $this->cor          =$row['cor_carro'];

    }
    public function editarFormulario($nome,$modelo,$ano,$cor,$id){
        if($this->editar->updateCar($nome,$modelo,$ano,$cor,$id) == TRUE){
            echo "<script>alert('Carro atualizado com sucesso!');document.location='../view/index.php?page_id=car'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getIdCarro(){
        return $this->idCarro;
    }
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

}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerCar($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome_carro'],$_POST['modelo_carro'],$_POST['ano_carro'],$_POST['cor_carro'],$_POST['id_carro']);
}
?>