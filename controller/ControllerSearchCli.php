<?php
require_once("../model/banco.php");

session_start();

$pageid = $_SESSION['pageid'];

class searchClient{
    
    private $client;

    public function __construct($searchCli){
        $this->client = new Banco($searchCli);
        $this->runSearch($searchCli);
    }

    private function runSearch($searchCli){
        $row = $this->client->getClientSearch($searchCli);
    }
}
$searchCli = filter_input(INPUT_GET,'term');
$search = new searchClient($searchCli);