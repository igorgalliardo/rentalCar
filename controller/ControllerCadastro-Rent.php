<?php
require_once("../model/cadastro-rent.php");


class cadastroControllerRent{

    private $cadastroRent;

    public function __construct(){
        $this->cadastroRent = new CadastroRent();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastroRent->setNome($_POST['id_cliente_reserva']);
        $this->cadastroRent->setModelo($_POST['id_carro_reserva']);
        $this->cadastroRent->setAno($_POST['data_reserva']);
        $this->cadastroRent->setCor($_POST['data_devolucao']);
        $this->cadastroRent->setCor($_POST['valor_reserva']);
        $result = $this->cadastroRent ->incluir();
        if($result >= 1){
            echo "<script>alert('Carro Cadastrado com sucesso!');document.location='../view/cadastro.php?page_id=car'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroControllerRent();