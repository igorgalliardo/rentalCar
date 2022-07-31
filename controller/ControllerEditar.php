<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
    private $telefone;
    private $email;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaClient($id);
        $this->nome         =$row['nome_cliente'];
        $this->telefone     =$row['telefone_cliente'];
        $this->email        =$row['email_cliente'];

    }
    public function editarFormulario($nome,$telefone,$email,$id){
        if($this->editar->updateClient($nome,$telefone,$email,$id) == TRUE){
            echo "<script>alert('Cliente atualizado com sucesso!');document.location='../view/index.php?page_id=client'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }

}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome_cliente'],$_POST['telefone_cliente'],$_POST['email_cliente'],$_POST['id_cliente']);
}
?>