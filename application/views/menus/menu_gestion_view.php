<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/estilos.css">
        <link href="<?php echo base_url() ?>public/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse navbar-default" role="navigation">
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
                    <a class="navbar-brand" href="<?php echo base_url() ?>">SAGTM</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="<?php // echo base_url() ?>">Inicio</a></li>-->
                        <li><a href="<?php echo base_url() ?>index.php/gestionar/asesor_estado">
                                <span class="glyphicon glyphicon-time"></span>&nbsp;Estado Asesor</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/gestionar/agendados">
                                <span class="glyphicon glyphicon-calendar"></span>&nbsp;Agendados</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/gestionar/gestiona">
                                <span class="glyphicon glyphicon-earphone"></span>&nbsp;Gestión</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/gestionar/eventos">
                                <span class="glyphicon glyphicon-book"></span>&nbsp;Eventos</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/administracion/admon">
                                <span class="glyphicon glyphicon-list-alt"></span>&nbsp;Administración</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span>
                                <?php // echo $usuario; ?> Usuario <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="cppci/logout">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
<!--                    <ul class="nav navbar-nav ">
                        <li><a href="cppci/logout">Salir</a></li>
                    </ul>-->
                </div>
            </nav>
        </div>


