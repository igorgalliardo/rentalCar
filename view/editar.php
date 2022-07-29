<?php $pageid = $_GET['page_id'];?>
<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
    <?php include("menu.php") ?>
    
    <?php 
        if($pageid=="client"){
            require_once("../controller/ControllerEditar.php");
            include("editar-client.php");
        }else{
            require_once("../controller/ControllerEditar-Car.php");
            include("editar-car.php");
        }
    ?>
</body>

</html>