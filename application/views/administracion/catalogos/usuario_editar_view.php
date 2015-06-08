<div class="container col-lg-6 col-lg-offset-3">
    <div class="col-lg-8 col-lg-offset-2 well" id="content">
        <legend>Editar Cargo</legend>
        <?php
        $formato = array('class' => 'form-horizontal');
        echo form_open();
        echo form_hidden('idcargo',$idcargo);
        ?>
        <fieldset>
            <div class="form-group">
                <div class="col-lg-3">
                    <label for="cargo" class="col-sm-2 control-label">Cargo</label>
                </div>
                <div class="input-group col-sm-8">
                    <?php
                    echo form_input(array("class" => "form-control", "value" => $cargo_por_id[0]['cargo'], "name" => "cargo" ));
                    echo form_error('cargo');
                    ?>
                </div>
            </div>
            <div class="form-actions">
                <?php
                echo form_submit('botonSubmit', 'Guardar', 'class="btn btn-success"');
                ?>
                <button type="reset" class="btn btn-success" onclick="location.href = 'index.php/catalogos/cargos/lista_cargos'">Cancelar</button>
            </div>
        </fieldset>
        <?php
        echo form_close();
        ?>
    </div>
</div>