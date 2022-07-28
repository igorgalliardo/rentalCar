<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
require_once("../model/cadastro.php");


class cadastroController{

    private $cadastroClient;

    public function __construct(){
        $this->cadastroClient = new CadastroClient();
<<<<<<< HEAD
=======
=======
require_once("../model/cadastroLivro.php");

class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
        $this->incluir();
    }

    private function incluir(){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
        $this->cadastroClient->setNome($_POST['nome_cliente']);
        $this->cadastroClient->setTelefone($_POST['telefone_cliente']);
        $this->cadastroClient->setEmail($_POST['email_cliente']);
        $result = $this->cadastroClient->incluir();
        if($result >= 1){
            echo "<script>alert('Cliente Cadastrado com sucesso!');document.location='../view/cadastro.php?page_id=client'</script>";
<<<<<<< HEAD
=======
=======
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setAutor($_POST['autor']);
        $this->cadastro->setQuantidade($_POST['quantidade']);
        $this->cadastro->setPreco($_POST['preco']);
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();