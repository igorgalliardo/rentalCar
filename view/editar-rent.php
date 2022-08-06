<div class="row">
        <form method="post" action="../controller/ControllerEditar-Rent.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="searchCli" name="id_cliente_reserva" value="<?php echo $editar->getClienteR(); ?>" required autofocus>
                <input class="form-control" type="text" id="searchCar" name="id_carro_reserva" value="<?php echo $editar->getCarroR(); ?>" required>
                <input class="form-control" type="text" name="data_reserva" value="<?php echo $editar->getDataR(); ?>" required>
                <input class="form-control" type="text" name="data_devolucao" value="<?php echo $editar->getDataD(); ?>" required>
                <input class="form-control" type="text" name="valor_reserva" value="<?php echo $editar->getValorR(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id_reserva" value="<?php echo $editar->getIdReserva();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script>
    $(function(){
        $("#searchCli").autocomplete({
            source: '../controller/ControllerSearchCli.php'
        });
        $("#searchCar").autocomplete({
            source: '../controller/ControllerSearchCar.php'
        });
    });
</script>