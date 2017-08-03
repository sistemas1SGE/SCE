<section class="content-header">
    <h1>
        <?php echo $titulo;?>
        <small>Editor</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
	<li class="active"><a href="<?php echo base_url().'index.php/'.$titulo.'-info';?>"><?php echo $titulo;?></a></li>
	<li class="active">Editor</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-9-center">
            <div class="box box-primary">
            <?php 
            $a['actividades_id']        =  NULL;
            $a['actividades_nombre']    =  NULL;
            $a['actividades_cupo']      =  NULL;
            $a['actividades_horario']   =  NULL;
            $a['estudiante_id']         =  NULL;
            $a['maestros_id']           =  NULL;
            foreach ($get as $key) {
                    $a['actividades_id']        =  $key['actividades_id'];
                    $a['actividades_nombre']    =  $key['actividades_nombre'];
                    $a['actividades_cupo']      =  $key['actividades_cupo'];
                    $a['actividades_horario']   =  $key['actividades_horario'];
                    $a['estudiante_id']         =  $key['estudiante_id'];
                    $a['maestros_id']           =  $key['maestros_id'];
            } ?>
                <div class="box box-info" id="from-view">
                    <form id="form" role="form" action="<?php echo base_url().'index.php/'.$titulo.'-proc';?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group text-center">
                                <div class="col-xs-6">
                                    <label for="">Nombre de la actividad</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-futbol-o"></i>
                                            </div>
                                        <input type="text" class="form-control" placeholder="Actividad" name="actividades_nombre" id="actividades_nombre" value="<?php echo $a['actividades_nombre'];?>" required>
                                        </div>
                                    <label for="">Cupo</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-child"></i>
                                            </div>
                                        <input type="number" step="any" class="form-control" placeholder="Maximo de alumnos" name="actividades_cupo" id="actividades_cupo" value="<?php echo $a['actividades_cupo'];?>" required>
                                        </div>
                                    
                                    <div class="form-group">
                                        <label>Dia y hora</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" placeholder="Dia y hora" name="actividades_horario" id="actividades_horario" value="<?php echo $a['actividades_horario'];?>" required>
                                        </div>
                                            <!-- /.input group -->
                                    </div>
                                </div>
                            <div class="col-xs-6">
                                <label for="contacto_nombre">Alumno</label>
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona alumno" style="width: 100%;" tabindex="-1" aria-hidden="true" name="estudiante_id" id="estudiante_id" required>
                                        <?php for ($b=0;$b<10;$b++){
                                            echo '<option value="'.$b.'"';
                                            if($b == $a['estudiante_id']){ echo 'selected'; }
                                            echo '>'.$b.'</option>';
                                        } ?>
                                    </select>
				<label for="empresa_email2">Profesor</label>
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona profesor" style="width: 100%;" tabindex="-1" aria-hidden="true" name="maestros_id" id="maestros_id" required>
                                        <?php for ($b=0;$b<10;$b++){
                                            echo '<option value="'.$b.'"';
                                            if($b == $a['maestros_id']){ echo 'selected'; }
                                            echo '>'.$b.'</option>';
                                        } ?>
                                    </select>
				<br/>
                            </div>
			</div>
                    </div>
                    <div class="text-right">
			<button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url().'index.php/'.$titulo.'-info';?>';" title="Cancelar">
                            <i class="fa fa-close"> Cancelar</i>
			</button>
                        <button type="submit" class="btn btn-info" name="submit" form="form" value="submit" >
                            <i class="fa fa-save"> Guardar</i>
			</button>
                    </div>
                    <br/>
                    <input type="number" name="actividades_id" id="actividades_id" value="<?php echo $a['actividades_id'];?>" style="display: none;">
		</form>
            </div>
	</div>
    </div>
</div>
</section>