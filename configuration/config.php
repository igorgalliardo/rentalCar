<?php 
//connection with database

    define('HOST','localhost');
    define('DATABASENAME','rentalcar');
    define('USER','root');
    define('PASSWORD','');

    class Connect{  
        protected $con;
    
        function __construct(){
            $this->connectDatabase();
        }

        function connectDatabase(){
            try{
                $this->con = new PDO('mysql:host'.HOST.';dbname='.DATABASENAME,USER,PASSWORD);
            }catch(PDOException $e){
                echo "Error to connect to DB!". $e->getMessage();
                die();
            }
        }
    }

?>