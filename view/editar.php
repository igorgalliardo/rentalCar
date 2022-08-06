<?php $pageid = $_GET['page_id'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
</head>
<?php include("head.php") ?>
<body>
    <?php include("menu.php") ?>
    
    <?php 
        if($pageid=="client"){
            require_once("../controller/ControllerEditar.php");
            include("editar-client.php");
        }else if($pageid=="car"){
            require_once("../controller/ControllerEditar-Car.php");
            include("editar-car.php");
        }else{
            require_once("../controller/ControllerEditar-Rent.php");
            include("editar-rent.php");
        }
    ?>
</body>

</html>