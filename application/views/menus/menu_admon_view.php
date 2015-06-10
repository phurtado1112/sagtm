<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/jquery-ui/jquery-ui.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>public/jquery-ui/jquery-ui.theme.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/estilos.css">
        <link href="<?php echo base_url() ?>public/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                
                <!-- El logotipo y el icono que despliega el menú se agrupan
                     para mostrarlos mejor en los dispositivos móviles -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Desplegar navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>index.php/administracion/admon">SAGTM Administración</a>
                </div>

                <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                     otro elemento que se pueda ocultar al minimizar la barra -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="<?php // echo base_url() ?>index.php/admon">Inicio</a></li>-->

<!--                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Transacciones <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php // echo base_url() ?>index.php/transacciones/solicitud_facturacion">Solicitud de Facturación</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php // echo base_url() ?>index.php/transacciones/recibo_facturas">Recibo de Factura</a></li>
                            </ul>
                        </li>-->
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span>&nbsp;
                                Catálogos <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/campanias/campanias_lista">Campañas</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/eventos/lista_eventos">Eventos</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/evento_estados/lista_evento_estados">Estados de Eventos</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/tipifica_gestion/lista_tipifica_gestion">Tipificación de Gestión</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/contactos/lista_contactos">Contactos</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/contacto_prioridades/lista_contacto_prioridades">Prioridades de Contacto</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/contacto_estados/lista_contacto_estados">Estados de Contacto</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/paises/paises_lista">Países</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/usuario_estados/lista_usuarios_estados">Estados de Usuarios</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/usuario_tipos/lista_usuarios_tipos">Tipos de Usuarios</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/catalogos/usuarios/lista_usuarios">Usuarios</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;
                                Reportes <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() ?>index.php/administracion/reportes/llamadas_asesores">Llamadas de Asesores</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/reportes/gestion_campanias">Gestión de Campañas</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url() ?>index.php/administracion/reportes/estados_asesores">Estados de Asesores</a></li>
                            </ul>
                        </li>
                    </ul>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url() ?>index.php/gestion"><span class="glyphicon glyphicon-b"></span>&nbsp;Regresar</a></li>
                    </ul>
                </div>
            </nav>
        </div>

