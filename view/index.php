<?php require_once("../controller/ControllerListar.php");

$pageid = $_GET['page_id'];



$_SESSION['pageid'] = $pageid;
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
   <?php include("menu.php");
 
        if($pageid == "client"){
            include("client-list.php");
        }else if($pageid == "car"){
            include("car-list.php");
        }else{
            include("rent-list.php");
        }
    ?>
</body>
</html>