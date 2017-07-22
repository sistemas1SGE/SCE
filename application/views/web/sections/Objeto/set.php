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
                                <div class="form-group text-blue">
                                    <h4><b>Objeto</b></h4>
                                    <label for="direccion_pais">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Nombre de objeto" name="" id="" value="" required>
                                    <br/>
                                    <label for="direccion_estado">HTML</label>
                                    <br/>
                                        <textarea rows="4" cols="150" form="usrform" name="" id="" value="" required></textarea>
                                    
                                    
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