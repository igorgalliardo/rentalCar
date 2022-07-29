<div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" name="nome_cliente" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" name="telefone_cliente" value="<?php echo $editar->getTelefone(); ?>" required>
                <input class="form-control" type="text" name="email_cliente" value="<?php echo $editar->getEmail(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id_cliente" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
</div>