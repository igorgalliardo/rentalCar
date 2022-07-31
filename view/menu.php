<?php
$pageid = $_GET['page_id'];?>
<hr>
<a href="index.php?page_id=client" class="btn btn-default">Inicio</a>
<a href="index.php?page_id=car" class="btn btn-default">Carros</a>
<a href="cadastro?page_id=<?php echo $pageid ;?>" class="btn btn-success">Cadastar</a>
<hr>