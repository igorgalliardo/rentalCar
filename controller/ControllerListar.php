<?php
require_once("../model/banco.php");

session_start();

$pageid = $_SESSION['pageid'];

class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabelaClient();
    }

    private function criarTabelaClient(){
        $row = $this->lista->getClient();
        foreach ($row as $value){
            $pageid = $_SESSION['pageid'];
            echo "<tr>";
            echo "<th>".$value['id_cliente'] ."</th>";
            echo "<td>".$value['nome_cliente'] ."</td>";
            echo "<td>".$value['telefone_cliente'] ."</td>";
            echo "<td>".$value['email_cliente'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?page_id=$pageid&id=".$value['nome_cliente']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome_cliente']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

class listarControllerCar{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabelaCar();
    }

    private function criarTabelaCar(){
        $row = $this->lista->getCar();
        foreach ($row as $value){
            $pageid = $_SESSION['pageid'];
            echo "<tr>";
            echo "<th>".$value['id_carro'] ."</th>";
            echo "<td>".$value['nome_carro'] ."</td>";
            echo "<td>".$value['modelo_carro'] ."</td>";
            echo "<td>".$value['ano_carro'] ."</td>";
            echo "<td>".$value['cor_carro'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?page_id=$pageid&id=".$value['id_carro']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar-Car.php?id=".$value['id_carro']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

class listarControllerRent{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabelaRent();
    }

    private function criarTabelaRent(){
        $row = $this->lista->getRentC();
        foreach ($row as $value){
            $pageid = $_SESSION['pageid'];
            echo "<tr>";
            echo "<th>".$value['id_reserva'] ."</th>";
            echo "<td>".$value['nome_carro'] . ' | ' .$value['modelo_carro']."</td>";
            echo "<td>".$value['nome_cliente'] ."</td>";
            echo "<td>".$value['data_reserva'] ."</td>";
            echo "<td>".$value['data_devolucao'] ."</td>";
            echo "<td>R$: ".$value['valor_reserva'] .",00</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?page_id=$pageid&id=".$value['id_reserva']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar-Car.php?id=".$value['id_reserva']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}