<?php
require_once("../model/banco.php");
<<<<<<< HEAD

session_start();

$pageid = $_SESSION['pageid'];

=======
$pageid = 2;
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabelaClient();
    }

    private function criarTabelaClient(){
        $row = $this->lista->getClient();
        foreach ($row as $value){
<<<<<<< HEAD
            $pageid = $_SESSION['pageid'];
=======
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
            echo "<tr>";
            echo "<th>".$value['id_cliente'] ."</th>";
            echo "<td>".$value['nome_cliente'] ."</td>";
            echo "<td>".$value['telefone_cliente'] ."</td>";
            echo "<td>".$value['email_cliente'] ."</td>";
<<<<<<< HEAD
            echo "<td><a class='btn btn-warning' href='editar.php?pageid=$pageid&id=".$value['nome_cliente']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome_cliente']."'>Excluir</a></td>";
=======
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['nome_cliente']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome_cliente']."'>Excluir</a></td>";
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
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
<<<<<<< HEAD
            $pageid = $_SESSION['pageid'];
=======
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
            echo "<tr>";
            echo "<th>".$value['id_carro'] ."</th>";
            echo "<td>".$value['nome_carro'] ."</td>";
            echo "<td>".$value['modelo_carro'] ."</td>";
            echo "<td>".$value['ano_carro'] ."</td>";
            echo "<td>".$value['cor_carro'] ."</td>";
<<<<<<< HEAD
            echo "<td><a class='btn btn-warning' href='editar.php?pageid=$pageid&id=".$value['id_carro']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['id_carro']."'>Excluir</a></td>";
=======
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['id_carro']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['id_carro']."'>Excluir</a></td>";
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
            echo "</tr>";
        }
    }
}