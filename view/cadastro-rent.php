<div class="row">
        <form method="post" action="../controller/ControllerNewRent.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="searchCli" name="id_cliente_reserva" placeholder="Nome do Cliente" required autofocus>
                <input class="form-control" type="text" id="searchCar" name="id_carro_reserva" placeholder="Veiculo" required>
                <input class="form-control" type="text" name="data_reserva" placeholder="Data da Reserva" required>
                <input class="form-control" type="text" name="data_devolucao" placeholder="Data da Devolucao" required>
                <input class="form-control" type="text" name="valor_reserva" placeholder="Valor da Reserva" required>
                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
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