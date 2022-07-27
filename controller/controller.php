<?php 

    require_once('../configuration/config.php');

    class Controller{
        private $model;

        function __construct(){
            $this->model = new Model();
        }

        function selectClient(){
            $resultData = $this->model->selectClient();
            require_once('../view/index.php');
        }
    }

?>