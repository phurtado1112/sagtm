<div class="container col-lg-6 col-lg-offset-3">
    <div class="col-lg-10 col-lg-offset-1 well" id="content">
        <legend>Agregar Campaña</legend>
        <?php
        $formato = array('class' => 'form-horizontal');
        echo form_open('index.php/catalogos/administración/paises/pais_agregar', $formato);
        ?>
        <fieldset>
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="campania" class="col-lg-10 control-label">Campaña</label>
                </div>
                <div class="input-group col-sm-6">
                    <?php echo form_input(array("class" => "form-control", "placeholder" => "Campaña", "name" => "campania")) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="campania_fecha_inicio" class="col-lg-10 control-label">Fecha de Inicio</label>
                </div>
                <div class="input-group col-sm-6">
                    <?php echo form_input(array("class" => "form-control", "value" => "00-00-0000", "name" => "campania_fecha_inicio", "id" => "datepicker")) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="campania_fecha_fin" class="col-lg-10 control-label">Fecha de Fin</label>
                </div>
                <div class="input-group col-sm-6">
                    <?php echo form_input(array("class" => "form-control", "value" => "00-00-0000", "name" => "campania_fecha_fin", "id" => "datepicker1")) ?>
                </div>
            </div>
            <div class="form-actions">
                <?php
                echo form_submit('botonSubmit', 'Agregar', 'class="btn btn-primary tboton1"');
                ?>
                <a class="btn btn-info tboton1" href="<?php echo base_url() ?>index.php/administracion/catalogos/campanias/campanias_lista">Cancelar</a>
            </div>
        </fieldset>
        <?php
        echo form_close();
        ?>
    </div>
</div>