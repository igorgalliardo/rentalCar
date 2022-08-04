<?php
require_once("../model/banco.php");

session_start();

$pageid = $_SESSION['pageid'];

class searchCar{

    private $car;

    public function __construct($searchCar){
        $this->car = new Banco($searchCar);
        $this->runSearch($searchCar);
    }

    private function runSearch($searchCar){
        $row = $this->car->getCarSearch($searchCar);
    }
}
$searchCar = filter_input(INPUT_GET,'term');
$search = new searchCar($searchCar);