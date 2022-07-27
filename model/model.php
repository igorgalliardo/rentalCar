<?php

require_once('../configuration/config.php');

    class Model extends Connect{
        private $table;

        function __construct(){
            parent::__construct();
            $this->table = 'tbcliente';
        }

        function selectClient(){
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }
    }

?>