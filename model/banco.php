<?php
//here we start the database connection getting infos from init.php
require_once("../init.php");

//starting the class banco to create a connection with database
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
        //using construc function to create a connection always when we create one instance for Banco
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        //here is a basic connection with DB, we are using the definitions from init.php as parameter
    }

    //this function is responsible to receive as parameter informations from controllerCadastro
<<<<<<< HEAD
    public function setClient($nome,$telefone,$email){
        $stmt = $this->mysqli->prepare("INSERT INTO tbcliente (`nome_cliente`, `telefone_cliente`, `email_cliente`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$telefone,$email);
=======
<<<<<<< HEAD
    public function setClient($nome,$telefone,$email){
        $stmt = $this->mysqli->prepare("INSERT INTO tbcliente (`nome_cliente`, `telefone_cliente`, `email_cliente`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$telefone,$email);
=======
<<<<<<< HEAD
    public function setClient($nome,$telefone,$email){
        $stmt = $this->mysqli->prepare("INSERT INTO tbcliente (`nome_cliente`, `telefone_cliente`, `email_cliente`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$telefone,$email);
=======
    public function setLivro($nome,$autor,$quantidade,$preco,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO livros (`nome`, `autor`, `quantidade`, `preco`, `data`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$autor,$quantidade,$preco,$data);
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
<<<<<<< HEAD
    }

    public function setCar($nome,$modelo,$ano,$cor){
        $stmt = $this->mysqli->prepare("INSERT INTO tbcarro (`nome_carro`, `modelo_carro`, `ano_carro`, `cor_carro`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$nome,$modelo,$ano,$cor);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

=======
<<<<<<< HEAD
    }

=======
<<<<<<< HEAD
    }

=======

    }
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd

    public function getClient(){
        $result = $this->mysqli->query("SELECT * FROM tbcliente");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd
    }

    public function getCar(){
        $result = $this->mysqli->query("SELECT * FROM tbcarro");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function deleteLivro($id){
        if($this->mysqli->query("DELETE FROM `livros` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
<<<<<<< HEAD
    public function pesquisaClient($id){
        $result = $this->mysqli->query("SELECT * FROM tbcliente WHERE nome_cliente='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateClient($nome,$telefone,$email,$id){
        $stmt = $this->mysqli->prepare("UPDATE `tbcliente` SET `nome_cliente` = ?, `telefone_cliente`= ?, `email_cliente`=? WHERE `nome_cliente` = ?");
        $stmt->bind_param("ssss",$nome,$telefone,$email,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaCar($id){
        $result = $this->mysqli->query("SELECT * FROM tbcarro WHERE id_carro='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateCar($nome,$modelo,$ano,$cor,$id){
        $stmt = $this->mysqli->prepare("UPDATE `tbcarro` SET `nome_carro` = ?, `modelo_carro`=?, `ano_carro`=?, `cor_carro`=? WHERE `id_carro` = ?");
        $stmt->bind_param("sssss",$nome,$modelo,$ano,$cor,$id);
=======
    public function pesquisaLivro($id){
        $result = $this->mysqli->query("SELECT * FROM livros WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateLivro($nome,$autor,$quantidade,$preco,$flag,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?,`data` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssss",$nome,$autor,$quantidade,$preco,$flag,$data,$id);
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>