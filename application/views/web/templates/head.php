<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $titulo; ?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/morris/morris.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/iCheck/all.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/fullcalendar/fullcalendar.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>AdminLTE/plugins/fullcalendar/fullcalendar.print.css" media="print">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <img src="<?php echo base_url().'assets/';?>img/logo.jpg" class="logo-lg" width="215" height="50" alt="">
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <img src="<?php echo base_url().'assets/';?>AdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                  <span class="hidden-xs"><?php echo 'NetWeb';?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="<?php echo base_url().'assets/';?>AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                          <?php echo 'NetWeb'.' - '.'Web Developer';?>
                                          <small><?php echo 'Miembro desde: '.'2017';?></small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo base_url().'index.php/'.'Sign-out';?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
      <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url().'assets/';?>AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo 'NetWeb';?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="header">Menu</li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Actividad-info" id="empr_button">
                        <i class="fa fa-child"></i>
                        <span>Actividades</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Inscripcion-info" id="empr_button">
                        <i class="fa fa-file-text"></i>
                        <span>Inscripcion</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Maestro-info" id="empr_button">
                        <i class="fa fa-suitcase"></i>
                        <span>Maestros</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Calificacion-info" id="empr_button">
                        <i class="fa fa-clipboard"></i>
                        <span>Calificaciones</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Materia-info" id="empr_button">
                        <i class="fa fa-pencil-square"></i>
                        <span>Materias</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Grupo-info" id="empr_button">
                        <i class="fa fa-users"></i>
                        <span>Grupos</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Administrativo-info" id="empr_button">
                        <i class="fa fa-cog"></i>
                        <span>Administrativo</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>EstudianteTutor-info" id="empr_button">
                        <i class="fa fa-user"></i>
                        <span>Estudiantes / Tutores</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Rol-info" id="empr_button">
                        <i class="fa fa-shield"></i>
                        <span>Roles</span>
                    </a>
                </li>
                <!-- -->
                <li>
                    <a href="<?php echo base_url().'index.php/';?>Objeto-info" id="empr_button">
                        <i class="fa fa-lock"></i>
                        <span>Objetos</span>
                    </a>
                </li>
                <!--
                <li class="treeview">
                    <a href="" id="pros_button">
                        <i class="fa fa-taxi"></i>
                        <span>-----</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li class="active">
                            <a href="#" id="perm_button">
                                <i class="fa fa-h-square"></i>
                                <span>-----</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#" id="perm_button">
                                <i class="fa fa-plane"></i>
                                    <span>-----</span>
                            </a>
                        </li>
                    </ul>
                </li>
                -->
            </ul>
        </section>
    </aside>
<div class="content-wrapper">
