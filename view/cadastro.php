<?php
$pageid = $_GET['page_id'];



$_SESSION['pageid'] = $pageid;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
</head>
<body>
<?php include("head.php")?>

<body>
    <?php include("menu.php") ?>
    <?php if($pageid == "client"){?>
            <?php include("cadastro-cliente.php");
        }else if($pageid == "car"){
            include("cadastro-car.php");
        }else{
            include("cadastro-rent.php");
        }  
    ?>
</body>
</html>