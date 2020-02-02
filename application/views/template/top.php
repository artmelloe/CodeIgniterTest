<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Painel <?php echo (!empty($title) ? $title : '');?></title>
        <link href="<?php echo BASE_URL('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo BASE_URL('assets/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo BASE_URL('assets/vendor/chosen/chosen.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo BASE_URL('assets/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">
        <link href="<?php echo BASE_URL('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo BASE_URL('assets/vendor/custom/css/custom.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo BASE_URL(); ?>">CRUD CodeIgniter</a>
                </div>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo BASE_URL(); ?>"><i class="fa fa-home fa-fw"></i> Index</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-briefcase fa-fw"></i> Cargo<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo BASE_URL(); ?>role/new">Novo cargo</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL(); ?>role">Todos os cargos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Programador<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo BASE_URL(); ?>programmer/new">Novo programador</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL(); ?>programmer">Todos os programadores</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper">