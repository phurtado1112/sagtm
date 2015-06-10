<div class="container col-lg-6 col-lg-offset-3">
    <div class="col-lg-8 col-lg-offset-2 well" id="content">
        <legend>Agregar País</legend>
        <?php
        $formato = array('class' => 'form-horizontal');
        echo form_open('index.php/catalogos/administración/paises/pais_agregar', $formato);
        ?>
        <fieldset>
            <div class="form-group">
                <div class="col-lg-3">
                    <label for="pais" class="col-sm-2 control-label">País</label>
                </div>
                <div class="input-group col-sm-8">
                    <?php echo form_input(array("class" => "form-control", "placeholder" => "País", "name" => "pais")) ?>
                </div>
            </div>
            <div class="form-actions">
                <?php
                echo form_submit('botonSubmit', 'Agregar', 'class="btn btn-primary tboton1"');
                ?>
                <a class="btn btn-info tboton1" href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/paises_lista">Cancelar</a>
            </div>
        </fieldset>
        <?php
        echo form_close();
        ?>
    </div>
</div>