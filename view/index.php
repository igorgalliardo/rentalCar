<?php require_once("../controller/ControllerListar.php");

$pageid = $_GET['page_id'];
<<<<<<< HEAD



$_SESSION['pageid'] = $pageid;
=======
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
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