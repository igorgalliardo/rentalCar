<div class="row">
        <form method="post" action="../controller/ControllerCadastro-Car.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" name="nome_carro" placeholder="Nome do Carro" required autofocus>
                <input class="form-control" type="text" name="modelo_carro" placeholder="Modelo do Carro" required>
                <input class="form-control" type="text" name="ano_carro" placeholder="Ano do Carro" required>
                <input class="form-control" type="text" name="cor_carro" placeholder="Cor do Carro" required>
                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
</div>