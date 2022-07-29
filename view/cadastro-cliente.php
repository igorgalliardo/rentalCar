<div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" name="nome_cliente" placeholder="Nome Cliente" required autofocus>
                <input class="form-control" type="text" name="telefone_cliente" placeholder="Telefone Cliente" required>
                <input class="form-control" type="text" name="email_cliente" placeholder="Email Cliente" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
</div>