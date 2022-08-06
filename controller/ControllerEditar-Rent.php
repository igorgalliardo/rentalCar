<?php
require_once("../model/banco.php");

class editarControllerRent {

    private $editar;
    private $idReserva;
    private $clienteR;
    private $carroR;
    private $dataR;
    private $dataD;
    private $valorR;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaRent($id);
        $this->idReserva            =$row['id_reserva'];
        $this->clienteR             =$row['nome_cliente'];
        $this->carroR               =$row['nome_carro'];
        $this->dataR                =$row['data_reserva'];
        $this->dataD                =$row['data_devolucao'];
        $this->valorR               =$row['valor_reserva'];

    }
    public function editarFormulario($clienteR,$carroR,$dataR,$dataD,$valorR,$id){
        if($this->editar->updateRent($clienteR,$carroR,$dataR,$dataD,$valorR,$id) == TRUE){
            echo "<script>alert('Reserva atualizada com sucesso!');document.location='../view/index.php?page_id=rent'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getIdReserva(){
        return $this->idReserva;
    }
    public function getClienteR(){
        return $this->clienteR;
    }
    public function getCarroR(){
        return $this->carroR;
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

}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerRent($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['id_cliente_reserva'],$_POST['id_carro_reserva'],$_POST['data_reserva'],$_POST['data_devolucao'],$_POST['valor_reserva'],$_POST['id_reserva']);
}
?>