<!DOCTYPE HTML>
<html>
<?php include("head.php")?>

<body>
    <?php include("menu.php") ?>
    <?php if($pageid == "client"){?>
            <?php include("cadastro-cliente.php");
        }else{
            include("cadastro-car.php");
        } 
    ?>
</body>

</html>