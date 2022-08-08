<?php
if(isset($_GET['page_id'])){
    $pageid = $_GET['page_id'];
}else{
    $pageid = "client";
}
?>
<hr>
<a href="index.php?page_id=client" class="btn btn-default">Clientes</a>
<a href="index.php?page_id=car" class="btn btn-default">Carros</a>
<a href="index.php?page_id=rent" class="btn btn-default">Reserva</a>
<a href="cadastro?page_id=<?php echo $pageid ;?>" class="btn btn-success">Cadastar</a>
<hr>