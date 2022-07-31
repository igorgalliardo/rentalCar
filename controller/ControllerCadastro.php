<?php
require_once("../model/cadastro.php");


class cadastroController{

    private $cadastroClient;

    public function __construct(){
        $this->cadastroClient = new CadastroClient();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastroClient->setNome($_POST['nome_cliente']);
        $this->cadastroClient->setTelefone($_POST['telefone_cliente']);
        $this->cadastroClient->setEmail($_POST['email_cliente']);
        $result = $this->cadastroClient->incluir();
        if($result >= 1){
            echo "<script>alert('Cliente Cadastrado com sucesso!');document.location='../view/cadastro.php?page_id=client'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();