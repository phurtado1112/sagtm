<div class="container">
    <h2><center><b>Lista de Campañas</b></center></h2>
</div>
<div class="container">
    <div class="row">
        <div class="span3 well">
            <div class="block-content collapse in">
                <!--<div class="navbar navbar-inner block-header">-->
                    <div class="muted pull-left" align="center"></div>
                    <div class="btn-group" role="group" aria-label="...">
                        <button href="agregar_usuario" type="button" class="btn btn-info">Nueva Campaña</button>
                        <button href="lista_cargos_inactivos" type="button" class="btn btn-primary">Listar Inactivas</button>
                    </div>
<!--                    <a href="agregar_cargo" class="btn btn-small btn-success">Nuevo Cargo</a>
                    <a href="lista_cargos_inactivos" class="btn btn-small btn-success">Cargos Inactivos</a>-->
                <!--</div>-->
                <table class="table table-striped">
                    <thead>
                    <th>No.</th>
                    <th>Campaña</th>
                    <th>Asesor</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Editar</th>
                    <th>Inactivar</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="usuario_editar_view.php"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="usuarios_inactivar"><span class="glyphicon glyphicon-asterisk"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="usuario_editar_view.php"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="usuarios_inactivar"><span class="glyphicon glyphicon-asterisk"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="usuario_editar_view.php"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="usuarios_inactivar"><span class="glyphicon glyphicon-asterisk"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="usuario_editar_view.php"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="usuarios_inactivar"><span class="glyphicon glyphicon-asterisk"></span></a></td>
                        </tr>
                    </tbody>
                    <?php
//                    echo '<tbody>';
//                    if ($cargos != FALSE) {
//                        $i = 1;
//                        foreach ($cargos as $fila) {
//                            $ids = $fila->idcargo;
//                            echo '<tr>';
//                            echo '<td>' . $i . '</td>';
//                            echo '<td>' . $fila->cargo . '</td>';
//                            echo '<td><a href="' . base_url() . 'index.php/administracion/catalogos/usuarios/usuario_editar/' . $ids . '">Editar</a></td>';
//                            echo '<td><a href="' . base_url() . 'index.php/administracion/catalogos/usuarios/usuarios_inactivar/' . $ids . '">Inactivar</a></td>';
//                            echo '<td><a href="' . base_url() . 'index.php/administracion/catalogos/usuarios/usuario_cambio_clave/' . $ids . '">Cambio Clave</a></td>';//                            
//                            echo '</tr>';
//                            $i++;
//                        }
//                    } else {
//                        echo '<tr><td colspan="4"><h2 align="center">NO HAY REGISTROS</h2></td></tr>';
//                    }
//                    echo '</tbody>';
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>