<section class="content-header">
	<h1>
		Empresas
		<small>Edit</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url();?>inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
		<li class="active"><a href="<?php echo base_url();?>empresas">Empresas</a></li>
		<li class="active">Edit</li>
	</ol>
</section>
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
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Datos del alumno</b></h4>
                                        <label for="contacto_nombre">Nombre(s)</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_apellidoMaterno">Apellidos</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_apellidoPaterno">CURP</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                        <h4 class="box-title" ><b>Genero</b></h4>
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Masculino
                                            <input type="radio" name="" class="minimal" checked="" name="" id="" value="" required>Femenino
                                            <ins class="iCheck-helper"></ins>
                                        <h4 class="box-title" ><b>Estado civil</b></h4>
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Soltero(@)
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Casado(@)
                                            <ins class="iCheck-helper"></ins>
                                        <label for="contacto_apellidoPaterno">Nacionalidad</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                            <br/>
                                        <label for="contacto_nombre">Estado de nacimiento</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona estado" style="width: 100%;" tabindex="-1" aria-hidden="true" name="" id="" value="" required>
                                                <option>Luis</option>
                                                <option>Maria</option>
                                                <option>Domm</option>
                                                <option>Carlos</option>
                                                <option>Laura</option>
                                                <option>Matias</option>
                                            </select>
                                        <label for="contacto_apellidoPaterno">Lengua materna</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                        <label for="contacto_apellidoPaterno">Tipo de documento oficial</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                        <label for="contacto_apellidoPaterno">Folio documento oficial</label>
                                            <input type="number" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_apellidoPaterno">Necesidades educativas</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_teléfono">Observaciones</label>
                                                <input type="text" class="form-control" placeholder="" name="" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Datos de contactos alumno</b></h4>
                                        <h4 class="box-title"><b>Telefono</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot; 9999-9999&quot;" data-mask="" name="" id="" value="" required>
                                        </div>
                                        <h4 class="box-title"><b>Celular</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" name="" id="" value="" required>
                                            </div>
                                        <h4 class="box-title" ><b>Red Social</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            <input type="text" class="form-control" placeholder="Facebook" name="" id="" value="" required>
                                            </div>
                                        <h4 class="box-title"><b>Correo</b></h4>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        <br/>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <h3 class="box-title" ><b>Direccion del alumno</b></h3>
                                    <h4><b>Calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Calle" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entre calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="1 calle" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b> Y calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="2 Calle" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="numero" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Manzana</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="" id="" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Lote</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="" id="" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero interior</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="" id="" value="0" required>
                                        </div>
                                    
                                    <h4 class="box-title" ><b>Departamento</b></h4>
                                            <input type="radio" name="r1" class="minimal" name="" id="" value="" required>SI
                                            <input type="radio" name="r1" class="minimal" checked="" name="" id="" value="" required>NO
                                            <ins class="iCheck-helper"></ins>
                                    <h4 class="box-title" ><b>Referencia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Referencias de tu domicilio" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Codigo postal</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="number" class="form-control" placeholder="CP" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Colonia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Colonia" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entidad federativa</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Ciudad donde vive" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Municipio</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Municipio" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Localidad</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Localidad" name="" id="" value="" required>
                                        </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Datos del tutor</b></h4>
                                        <label for="contacto_nombre">Nombre(s)</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_apellidoMaterno">Apellidos</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_apellidoPaterno">CURP</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                        <h4 class="box-title" ><b>Genero</b></h4>
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Masculino
                                            <input type="radio" name="" class="minimal" checked="" name="" id="" value="" required>Femenino
                                            <ins class="iCheck-helper"></ins>
                                        <h4 class="box-title" ><b>Estado civil</b></h4>
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Soltero(@)
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Casado(@)
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Divorciado(@)
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Viudo(@)
                                            <input type="radio" name="" class="minimal" name="" id="" value="" required>Union libre
                                            <ins class="iCheck-helper"></ins>
                                        <label for="contacto_apellidoPaterno">Nacionalidad</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                            <br/>
                                        <label for="contacto_nombre">Estado de nacimiento</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona estado" style="width: 100%;" tabindex="-1" aria-hidden="true" name="" id="" value="" required>
                                                <option>Luis</option>
                                                <option>Maria</option>
                                                <option>Domm</option>
                                                <option>Carlos</option>
                                                <option>Laura</option>
                                                <option>Matias</option>
                                            </select>
                                        <label for="contacto_apellidoPaterno">Lengua materna</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                        <label for="contacto_apellidoPaterno">Tipo de documento oficial</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
                                        <label for="contacto_apellidoPaterno">Folio documento oficial</label>
                                            <input type="number" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_apellidoPaterno">Necesidades educativas</label>
                                            <input type="text" class="form-control"  placeholder="" name="" id="" value="" required>
					<label for="contacto_teléfono">Observaciones</label>
                                                <input type="text" class="form-control" placeholder="" name="" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Datos de contactos del tutor</b></h4>
                                        <h4 class="box-title"><b>Telefono</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot; 9999-9999&quot;" data-mask="" name="" id="" value="" required>
                                        </div>
                                        <h4 class="box-title"><b>Celular</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" name="" id="" value="" required>
                                            </div>
                                        <h4 class="box-title" ><b>Red Social</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            <input type="text" class="form-control" placeholder="Facebook" name="" id="" value="" required>
                                            </div>
                                        <h4 class="box-title"><b>Correo</b></h4>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        <br/>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <h3 class="box-title" ><b>Direccion del tutor</b></h3>
                                    <h4><b>Calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Calle" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entre calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="1 calle" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b> Y calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="2 Calle" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="numero" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Manzana</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="" id="" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Lote</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="" id="" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero interior</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="" id="" value="0" required>
                                        </div>
                                    
                                    <h4 class="box-title" ><b>Departamento</b></h4>
                                            <input type="radio" name="r1" class="minimal" name="" id="" value="" required>SI
                                            <input type="radio" name="r1" class="minimal" checked="" name="" id="" value="" required>NO
                                            <ins class="iCheck-helper"></ins>
                                    <h4 class="box-title" ><b>Referencia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Referencias de tu domicilio" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Codigo postal</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="number" class="form-control" placeholder="CP" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Colonia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Colonia" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entidad federativa</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Ciudad donde vive" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Municipio</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Municipio" name="" id="" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Localidad</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Localidad" name="" id="" value="" required>
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
    </div>
</section>
