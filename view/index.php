<?php require_once("../controller/ControllerListar.php");

$pageid = $_GET['page_id'];



$_SESSION['pageid'] = $pageid;
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
   <?php include("menu.php");?>

   <?php if($pageid == "client"){?>
            <?php include("client-list.php");
        }else{
            include("car-list.php");
        }
    ?>
</body>
</html>