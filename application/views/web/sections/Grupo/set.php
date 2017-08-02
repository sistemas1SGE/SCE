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
            $a['grupo_id']        =  NULL;
            $a['grupo_grado']    =  NULL;
            $a['grupo_grupo']      =  NULL;
            foreach ($get as $key) {
                    $a['grupo_id']        =  $key['grupo_id'];
                    $a['grupo_grado']    =  $key['grupo_grado'];
                    $a['grupo_grupo']      =  $key['grupo_grupo'];
            } ?>
                <div class="box box-info" id="from-view">
                    <form id="form" role="form" action="<?php echo base_url().'index.php/'.$titulo.'-proc';?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group text-center">
                                <div class="col-xs-12">
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Grado y grupo</b></h4>
                                        <label for="contacto_nombre">Grado</label>
                                            <input type="number" class="form-control" placeholder="0" name="grupo_grado" id="grupo_grado" value="<?php echo $a['grupo_grado'];?>" required>
					<label for="contacto_apellidoMaterno">Grupo</label>
                                            <input type="text" class="form-control" placeholder="A" name="grupo_grupo" id="grupo_grupo" value="<?php echo $a['grupo_grupo'];?>" required>
                                    </div>
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
	
	</div>
    </div>
</div>
</section>