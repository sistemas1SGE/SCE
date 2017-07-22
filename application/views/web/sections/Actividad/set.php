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
            <?php for ($valor=0;$valor<1;$valor++) { ?>
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
                                        <input type="text" class="form-control"  name="" placeholder="Actividad" name="" id="" value="" required>
                                        </div>
                                    <label for="">Cupo</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-child"></i>
                                            </div>
                                        <input type="number" step="any" class="form-control" placeholder="Maximo de alumnos" name="" id="" value="" required>
                                        </div>
                                    
                                    <div class="form-group">
                                        <label>Dia y hora</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" name="" placeholder="Dia y hora" name="" id="" value="" required>
                                        </div>
                                            <!-- /.input group -->
                                    </div>
                                </div>
                            <div class="col-xs-6">
                                <label for="contacto_nombre">Alumno</label>
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona alumno" style="width: 100%;" tabindex="-1" aria-hidden="true" name="" id="" value="" required>
                                        <option>Luis</option>
                                        <option>Maria</option>
                                        <option>Domm</option>
                                        <option>Carlos</option>
                                        <option>Laura</option>
                                        <option>Matias</option>
                                    </select>
				<label for="empresa_email2">Profesor</label>
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona profesor" style="width: 100%;" tabindex="-1" aria-hidden="true" name="" id="" value="" required>
                                        <option>Luis</option>
                                        <option>Maria</option>
                                        <option>Domm</option>
                                        <option>Carlos</option>
                                        <option>Laura</option>
                                        <option>Matias</option>
                                    </select>
				<br/>
                            </div>
			</div>
                    </div>
                    <div class="text-right">
			<button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url().'index.php/'.$titulo.'-info';?>';" title="Cancelar">
                            <i class="fa fa-close"> Cancelar</i>
			</button>
			<button type="submit" form="form" value="Submit" class="btn btn-info" title="Guardar">
                            <i class="fa fa-save"> Guardar</i>
			</button>
                    </div>
                    <br/>
		</form>
            </div>
	<?php } ?>
	</div>
    </div>
</div>
</section>