<div class="container">
    <h2><center><b>Lista de Países</b></center></h2>
</div>
<div class="container">
    <div class="row">
        <div class="span3 well">
            <div class="block-content collapse in">
                    <div class="muted pull-left" align="center"></div>
                        <a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_agregar" class="btn btn-primary tboton"><span class="glyphicon glyphicon-plus"></span>&nbsp;País</a>
                        <a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/paises_inactivos_lista" class="btn btn-info tboton"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Inactivos</a>
                <table class="table table-striped">
                    <thead>
                    <th>No.</th>
                    <th>País</th>
                    <th>Editar</th>
                    <th>Inactivar</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_editar"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_inactivar"><span class="glyphicon glyphicon-thumbs-down"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_editar"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_inactivar"><span class="glyphicon glyphicon-thumbs-down"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_editar"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_inactivar"><span class="glyphicon glyphicon-thumbs-down"></span></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_editar"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/pais_inactivar"><span class="glyphicon glyphicon-thumbs-down"></span></a></td>
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