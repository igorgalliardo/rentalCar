<?php require_once("../controller/ControllerListar.php");

$pageid = $_GET['page_id'];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd



$_SESSION['pageid'] = $pageid;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 9284789f0185aa3a20a2ccf3de8f8c762e1daca6
>>>>>>> be54ce6fb4fe81bb147176ce110d0e50d4335611
>>>>>>> 1dd8c03478f214cf10a9900bb31b4c1a4b5a1edd
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