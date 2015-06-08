<div class="container">
    <h2><center><b>Lista de Cargos Inactivos</b></center></h2>
</div>
<div class="container">
    <div class="row">
        <div class="span3 well">
            <div class="block-content collapse in">
                <table class="table table-striped">
                    <thead>
                    <th>No.</th>
                    <th>Cargo</th>
                    </thead>
                    <tbody>
                        <?php
                        if ($cargos != FALSE) {
                            $i = 1;
                            foreach ($cargos as $fila) {
                                $ids = $fila->idcargo;
                                echo '<tr>';
                                echo '<td>' . $i . '</td>';
                                echo '<td>' . $fila->cargo . '</td>';
                                echo '</tr>';
                                $i++;
                            }
                        } else {
                            echo '<tr><td colspan="2"><h3 align="center">NO HAY REGISTROS</h3></td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="span3">
            <button type="reset" class="btn btn-success" onclick="location.href='lista_cargos'">Regresar</button>
        </div>
    </div>
</div>