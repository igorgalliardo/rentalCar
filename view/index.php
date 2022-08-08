<?php require_once("../controller/ControllerListar.php");
if(isset($_GET['page_id'])){
    $pageid = $_GET['page_id'];
}else{
    $pageid = "client";
}

$_SESSION['pageid'] = $pageid;
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
   <?php include("menu.php");?>

   <?php 
        if($pageid == "client"){?>
            <?php include("client-list.php");
        }else if($pageid == "car"){
            include("car-list.php");
        }else{
            include("rent-list.php");
        }
    ?>
</body>
</html>