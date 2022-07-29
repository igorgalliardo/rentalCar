<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
<<<<<<< HEAD
    private $telefone;
    private $email;
=======
    private $autor;
    private $quantidade;
    private $preco;
    private $data; 
    private $flag;
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
<<<<<<< HEAD
        $row = $this->editar->pesquisaClient($id);
        $this->nome         =$row['nome_cliente'];
        $this->telefone     =$row['telefone_cliente'];
        $this->email        =$row['email_cliente'];

    }
    public function editarFormulario($nome,$telefone,$email,$id){
        if($this->editar->updateClient($nome,$telefone,$email,$id) == TRUE){
            echo "<script>alert('Cliente atualizado com sucesso!');document.location='../view/index.php?page_id=client'</script>";
=======
        $row = $this->editar->pesquisaLivro($id);
        $this->nome         =$row['nome'];
        $this->autor        =$row['autor'];
        $this->quantidade   =$row['quantidade'];
        $this->preco        =$row['preco'];
        $this->data         =$row['data'];
        $this->flag         =$row['flag'];

    }
    public function editarFormulario($nome,$autor,$quantidade,$preco,$data,$flag,$id){
        if($this->editar->updateLivro($nome,$autor,$quantidade,$preco,$flag,$data,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
<<<<<<< HEAD
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
=======
    public function getAutor(){
        return $this->autor;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getData(){
        return $this->data;
    }
    public function getFlag(){
        return $this->flag;
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd
    }

}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
<<<<<<< HEAD
    $editar->editarFormulario($_POST['nome_cliente'],$_POST['telefone_cliente'],$_POST['email_cliente'],$_POST['id_cliente']);
=======
    $editar->editarFormulario($_POST['nome'],$_POST['autor'],$_POST['quantidade'],$_POST['preco'],$_POST['data'],$_POST['flag'],$_POST['id']);
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd
}
?>