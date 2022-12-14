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
        try {
                $this->mysqli = new PDO($dsn, $user, $pass, $options);
        }catch(\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
        //here is a basic connection with DB, we are using the definitions from init.php as parameter
    }
 
    //this function is responsible to receive as parameter informations from controllerCadastro
    public function setClient($nome,$telefone,$email){
        $stmt = $this->mysqli->prepare("INSERT INTO tbcliente (`nome_cliente`, `telefone_cliente`, `email_cliente`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$telefone,$email);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
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

    public function setRent($idCliente,$idCarro,$dataR,$dataD,$valorR){
        $sql = $this->mysqli->query("SELECT id_cliente from tbcliente WHERE nome_cliente = '$idCliente'");
        while($row = $sql->fetch_array(MYSQLI_ASSOC)){
            $cliente = $row['id_cliente'];
        }
        $sqlCar = $this->mysqli->query("SELECT id_carro from tbcarro WHERE nome_carro = '$idCarro'");
        while($rowCar = $sqlCar->fetch_array(MYSQLI_ASSOC)){
            $car = $rowCar['id_carro'];
        }
        $stmt = $this->mysqli->prepare("INSERT INTO tbreservas (`id_cliente_reserva`, `id_carro_reserva`, `data_reserva`, `data_devolucao`,`valor_reserva`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$cliente,$car,$dataR,$dataD,$valorR);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }
    

    public function getClient(){
        $result = $this->mysqli->query("SELECT * FROM tbcliente ORDER BY id_cliente ASC");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getCar(){
        $result = $this->mysqli->query("SELECT * FROM tbcarro ORDER BY id_carro ASC");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getRent(){
        $result = $this->mysqli->query("SELECT * FROM tbreservas");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
    public function getRentC(){
        $result = $this->mysqli->query("SELECT * from tbreservas INNER JOIN tbcliente ON tbreservas.id_cliente_reserva = tbcliente.id_cliente INNER JOIN tbcarro ON tbreservas.id_carro_reserva = tbcarro.id_carro ORDER BY id_reserva ASC");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getClientSearch($searchCli){
        $result = $this->mysqli->query("SELECT nome_cliente from tbcliente WHERE nome_cliente LIKE '%".$searchCli."%'ORDER BY nome_cliente ASC LIMIT 3");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row['nome_cliente'];
        }
        echo json_encode($array);
    }
    

    public function getCarSearch($searchCar){
        $result = $this->mysqli->query("SELECT nome_carro from tbcarro WHERE nome_carro LIKE '%".$searchCar."%'ORDER BY nome_carro ASC LIMIT 3");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row['nome_carro'];
        }
        echo json_encode($array);
    }

    public function deleteClient($id){
        if($this->mysqli->query("DELETE FROM `tbcliente` WHERE `nome_cliente` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function deleteCar($id){
        if($this->mysqli->query("DELETE FROM `tbcarro` WHERE `id_carro` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function deleteRent($id){
        if($this->mysqli->query("DELETE FROM `tbreservas` WHERE `id_reserva` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

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
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaRent($id){
        $result = $this->mysqli->query("SELECT * FROM tbreservas INNER JOIN tbcliente ON tbreservas.id_cliente_reserva = tbcliente.id_cliente INNER JOIN tbcarro ON tbreservas.id_carro_reserva = tbcarro.id_carro WHERE id_reserva='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateRent($clienteR,$carroR,$dataR,$dataD,$valorR,$id){
        $sql = $this->mysqli->query("SELECT id_cliente from tbcliente WHERE nome_cliente = '$clienteR'");
        while($row = $sql->fetch_array(MYSQLI_ASSOC)){
            $cliente = $row['id_cliente'];
        }
        $sqlCar = $this->mysqli->query("SELECT id_carro from tbcarro WHERE nome_carro = '$carroR'");
        while($rowCar = $sqlCar->fetch_array(MYSQLI_ASSOC)){
            $car = $rowCar['id_carro'];
        }
        $stmt = $this->mysqli->prepare("UPDATE `tbreservas` SET `id_cliente_reserva` = ?, `id_carro_reserva`=?, `data_reserva`=?, `data_devolucao`=?, `valor_reserva`=? WHERE `id_reserva` = ?");
        $stmt->bind_param("ssssss",$cliente,$car,$dataR,$dataD,$valorR,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>