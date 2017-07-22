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
                                    <label for="empresa_razonSocial">Razón social</label>
                                        <input type="text" class="form-control" id="empresa_razonSocial" name="empresa_razonSocial" placeholder="" value="<?php echo $valor;?>">
                                    <label for="empresa_rfc">RFC</label>
                                        <input type="text" class="form-control" id="empresa_rfc" name="empresa_rfc" placeholder="" value="<?php echo $valor;?>">
                                    <label for="empresa_email1">Primer E-mail</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" id="empresa_email1" name="empresa_email1" placeholder="" value="<?php echo $valor;?>">
					</div>
                                    <br/>
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Contacto 1</b></h4>
                                        <label for="contacto_nombre">Nombre</label>
                                            <input type="text" class="form-control" id="contacto_nombre" name="contacto_nombre" placeholder="" value="<?php echo $valor;?>">
					<label for="contacto_apellidoMaterno">Apellido Materno</label>
                                            <input type="text" class="form-control" id="contacto_apellidoMaterno" name="contacto_apellidoMaterno" placeholder="" value="<?php echo $valor;?>">
					<label for="contacto_apellidoPaterno">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="contacto_apellidoPaterno" name="contacto_apellidoPaterno" placeholder="" value="<?php echo $valor;?>">
					<label for="contacto_fotografía">Fotografía</label>
                                            <input type="file" class="form-control" id="contacto_fotografía" name="contacto_fotografía" placeholder="" value="<?php echo $valor;?>">
					<label for="contacto_teléfono">Telefono</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
						</div>
                                                <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask id="contacto_teléfono" name="contacto_teléfono" placeholder="" value="<?php echo $valor;?>">
                                            </div>
					<label for="contacto_teléfonoMovil">Telefono movil</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
						</div>
						<input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask id="contacto_teléfonoMovil" name="contacto_teléfonoMovil" placeholder="" value="<?php echo $valor;?>">
                                            </div>
					<label for="contacto_email1">Primer E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="email" class="form-control" id="contacto_email1" name="contacto_email1" placeholder="" value="<?php echo $valor;?>">
                                            </div>
					<label for="contacto_email2">Segundo E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="email" class="form-control" id="contacto_email2" name="contacto_email2" placeholder="" value="<?php echo $valor;?>">
                                            </div>
                                    </div>
                            </div>
                            <div class="col-xs-6">
                                <label for="contacto_nombre">Nombre comercial</label>
                                    <input type="text" class="form-control" id="contacto_nombre" name="contacto_nombre" placeholder="" value="<?php echo $valor;?>">
				<label for="empresa_telefono">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
					</div>
					<input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask id="empresa_telefono" name="empresa_telefono" placeholder="" value="<?php echo $valor;?>">
                                    </div>
				<label for="empresa_email2">Segundo E-mail</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input type="email" class="form-control" id="empresa_email2" name="empresa_email2" placeholder="" value="<?php echo $valor;?>">
                                    </div>
				<br/>
                                <div class="form-group breadcrumb text-blue">
                                    <h4><b>Contacto 2</b></h4>
                                    <label for="contacto_nombre">Nombre</label>
                                        <input type="text" class="form-control" id="contacto_nombre" name="contacto_nombre" placeholder="" value="<?php echo $valor;?>">
                                    <label for="contacto_apellidoMaterno">Apellido Materno</label>
                                        <input type="text" class="form-control" id="contacto_apellidoMaterno" name="contacto_apellidoMaterno" placeholder="" value="<?php echo $valor;?>">
                                    <label for="contacto_apellidoPaterno">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="contacto_apellidoPaterno" name="contacto_apellidoPaterno" placeholder="" value="<?php echo $valor;?>">
                                    <label for="contacto_fotografía">Fotografía</label>
                                        <input type="file" class="form-control" id="contacto_fotografía" name="contacto_fotografía" placeholder="" value="<?php echo $valor;?>">
                                    <label for="contacto_teléfono">Telefono</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask id="contacto_teléfono" name="contacto_teléfono" placeholder="" value="<?php echo $valor;?>">
					</div>
                                    <label for="contacto_teléfonoMovil">Telefono movil</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask id="contacto_teléfonoMovil" name="contacto_teléfonoMovil" placeholder="" value="<?php echo $valor;?>">
					</div>
                                    <label for="contacto_email1">Primer E-mail</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" id="contacto_email1" name="contacto_email1" placeholder="" value="<?php echo $valor;?>">
					</div>
                                    <label for="contacto_email2">Segundo E-mail</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" id="contacto_email2" name="contacto_email2" placeholder="" value="<?php echo $valor;?>">
					</div>
				</div>
                            </div>
                            <div class="form-group text-muted">
                                <h4><b>Direccion</b></h4>
				<label for="direccion_pais">Pais</label>
                                    <input type="text" class="form-control" id="direccion_pais" name="direccion_pais" placeholder="" value="<?php echo $valor;?>">
				<label for="direccion_estado">Estado</label>
                                    <input type="text" class="form-control" id="direccion_estado" name="direccion_estado" placeholder="" value="<?php echo $valor;?>">
				<label for="direccion_municipio">Municipio</label>
                                    <input type="text" class="form-control" id="direccion_municipio" name="direccion_municipio" placeholder="" value="<?php echo $valor;?>">
				<label for="direccion_ciudad">Ciudad</label>
                                    <input type="text" class="form-control" id="direccion_ciudad" name="direccion_ciudad" placeholder="" value="<?php echo $valor;?>">
                                <label for="direccion_colonia">Colonia</label>
                                    <input type="text" class="form-control" id="direccion_colonia" name="direccion_colonia" placeholder="" value="<?php echo $valor;?>">
				<label for="direccion_codigoPostal">Codigo Postal</label>
                                    <input type="text" class="form-control" id="direccion_codigoPostal" name="direccion_codigoPostal" placeholder="" value="<?php echo $valor;?>">
				<label for="direccion_calle">Calle</label>
                                    <input type="text" class="form-control" id="direccion_calle" name="direccion_calle" placeholder="" value="<?php echo $valor;?>">
				<label for="direccion_numeroExterior">Numero Exterior</label>
                                    <input type="text" class="form-control" id="direccion_numeroExterior" name="direccion_numeroExterior" placeholder="" value="<?php echo $valor;?>">
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