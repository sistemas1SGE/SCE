<section class="content-header">
    <h1>
	Empresas
	<small>---</small>
    </h1>
    <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
	<li class="active">Inscripcion</li>
    </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-9-center">
        <div class="box box-primary">
            <div class="box-header with-border pull-right">
                <button type="button" class="btn btn-block btn-primary" id="newFrom-view" onclick="window.location.href='<?php echo base_url().'index.php/'.$titulo.'-form/0';?>';" title="Nuevo">
                    <i class="fa fa-plus"> Nuevo</i>
                </button>
            </div>
            <br/>
            <div class="box-body">
                <table id="data_tabla_map1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Tutor</th>
                            <th>Necesidades Educativaas</th>
                            <th>Observaciones</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($get as $a) { ?>
                        <tr>
                            <td><?php echo $a['estudiante_id'];?></td>
                            <td><b><?php echo $a['estudiante_nombre'];?></b></td>
                            <td><b><?php echo $a['tutor_nombre'];?></b></td>
                            <td><?php echo $a['estudiante_necesidadEducativa'];?></td>
                            <td><b><?php echo $a['estudiante_observaciones'];?></b></td>
                            <td><b><?php echo $a['contacto_telefono'];?></b></td>
                            <td><?php echo $a['contacto_celular'];?></td>
                            <td><b><?php echo $a['contacto_correo'];?></b></td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm" onclick=""><i class="fa fa-file-pdf-o"></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm" onclick='window.location.href="<?php echo base_url().'index.php/'.$titulo.'-form/'.$a['estudiante_id'];?>";'><i class="fa fa-pencil"></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</section>
