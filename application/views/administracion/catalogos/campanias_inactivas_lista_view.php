<div class="container">
    <h2><center><b>Lista de Países Inactivos</b></center></h2>
</div>
<div class="container">
    <div class="row">
        <div class="span3 well">
            <div class="block-content collapse in">
                    <div class="muted pull-left" align="center"></div>
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-info" href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/paises_lista" >Regresar</a>
                    </div>
                <table class="table table-striped">
                    <thead>
                    <th>No.</th>
                    <th>País</th>
                    <th>Eliminar</th>
                    <th>Activar</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_activar"><span class="glyphicon glyphicon-thumbs-up"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_activar"><span class="glyphicon glyphicon-thumbs-up"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_activar"><span class="glyphicon glyphicon-thumbs-up"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_activar"><span class="glyphicon glyphicon-thumbs-up"></span></a></td>
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