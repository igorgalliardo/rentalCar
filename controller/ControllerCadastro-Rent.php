<?php
require_once("../model/cadastro-rent.php");


class cadastroControllerRent{

    private $cadastroRent;

    public function __construct(){
        $this->cadastroRent = new CadastroRent();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastroRent->setIdCliente($_POST['id_cliente_reserva']);
        $this->cadastroRent->setIdCarro($_POST['id_carro_reserva']);
        $this->cadastroRent->setDataR($_POST['data_reserva']);
        $this->cadastroRent->setDataD($_POST['data_devolucao']);
        $this->cadastroRent->setValorR($_POST['valor_reserva']);
        $result = $this->cadastroRent ->incluir();
        if($result >= 1){
            echo "<script>alert('Reserva Cadastrada com sucesso!');document.location='../view/cadastro.php?page_id=rent'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroControllerRent();