<?php
require_once("../model/banco.php");
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->deleteCar($id)== TRUE){
            echo "<script>alert('Carro deletado com sucesso!');document.location='../view/index.php?page_id=car'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>