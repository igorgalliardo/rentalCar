<div class="row">
        <form method="post" action="../controller/ControllerEditar-Car.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" name="nome_carro" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" name="modelo_carro" value="<?php echo $editar->getModelo(); ?>" required>
                <input class="form-control" type="text" name="ano_carro" value="<?php echo $editar->getAno(); ?>" required>
                <input class="form-control" type="text" name="cor_carro" value="<?php echo $editar->getCor(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id_carro" value="<?php echo $editar->getIdCarro();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>