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
<section class="content">
  <div class="row">
		<div class="col-md-9-center">
      <div class="box box-primary">
				<?php foreach ($get as $db) { ?>
				<div class="box box-info" id="from-view">
                                    <form role="form">
					<div class="box-body">
                                            <div class="form-group text-center">
						<div class="col-xs-6">
                                                    <h4><b>Datos del alumno</b></h4>
                                                    <label for="alumno_nombre">Nombre del alumno</label>
							<input type="text" class="form-control" placeholder="Nombre del alumno" name="" id="" value="" required>
                                                    <label for="alumno_curp">CURP</label>
							<input type="text" class="form-control" placeholder="CURP" name="" id="" value="" required>
                                                    <label for="alumno_genero">Genero</label>
                                                        <input type="radio" name="" value="M" checked> Masculino<br>
                                                        <input type="radio" name="" value="F"> Femenino<br>
                                                    <label for="alumno_civil">Estado civil</label>
							<input type="text" class="form-control" placeholder="Estado civil" name="" id="" value="" required>
                                                    <label for="alumno_nacion">Nacionalidad</label>
							<input type="text" class="form-control" placeholder="Nacionalidad" name="" id="" value="" required>	
                                                    <label for="alumno_estado">Estado de nacimiento</label>
							<select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona alumno" style="width: 100%;" tabindex="-1" aria-hidden="true" name="" id="" value="" required> 
                                                            <option value="Aguascalientes">Aguascalientes</option> 
                                                            <option value="Baja California">Baja California</option>
                                                        </select>
                                                    <label for="alumno_lengua">Lengua materna</label>
							<input type="text" class="form-control" placeholder="Lengua materna" name="" id="" value="" required>
                                                    <h4><b>Identificacion del alumno</b></h4>
                                                        <label for="alumno_documento">Tipo de documento oficial</label>
                                                    <input type="text" class="form-control" placeholder="Tipo de documento" name="" id="" value="" required>
                                                        <label for="alumno_folio">Folio documento oficial</label>
                                                    <input type="text" class="form-control" placeholder="Folio" name="" id="" value="" required>
							<label for="alumno_necesidad">Necesidades educativas especiales</label>
                                                    <input type="text" class="form-control" placeholder="Necesidades educativas especiales" name="" id="" value="" required>
                                                        <label for="alumno_observaciones">Observaciones</label>
                                                    <input type="text" class="form-control" placeholder="Observaciones" name="" id="" value="" required>        
                                                                        
                                                    <br/>                            
                                                    <h4><b>Datos del padre o tutor</b></h4>
                                                    <label for="tutor_nombre">Nombre del padre o tutor</label>
							<input type="text" class="form-control" placeholder="Nombre del padre" name="" id="" value="" required>
                                                    <label for="tutor_curp">CURP</label>
							<input type="text" class="form-control" placeholder="Curp" name="" id="" value="" required>
                                                    <label for="tutor_genero">Genero</label>
                                                        <input type="radio" name="radio1" value="M" checked> Masculino<br>
                                                        <input type="radio" name="radio1" value="F"> Femenino<br>
                                                    <label for="tutor_civil">Estado civil</label>
							<input type="text" class="form-control" placeholder="Estado civil" name="" id="" value="" required>
                                                    <label for="tutor_estudio">Grado de estudios</label>
							<select name="tutor_estado"> 
                                                            <option value="Primaria">Primaria</option> 
                                                            <option value="Secuandaria">Secundaria</option>
                                                            <option value="Bachillerato">Bachillerato</option>
                                                            <option value="Universidad">Universidad</option>
                                                            <option value="Posgrado">Posgrado</option>
                                                            <option value="Sin estudios">Sin estudios</option>
                                                        </select>
                                                    <label for="tutor_nacion">Nacionalidad</label>
							<input type="text" class="form-control" placeholder="Nacionalidad" name="" id="" value="" required>	
                                                    <label for="tutor_estado">Estado de nacimiento</label>
							<select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona alumno" style="width: 100%;" tabindex="-1" aria-hidden="true" name="" id="" value="" required>
                                                            <option value="Aguascalientes">Aguascalientes</option> 
                                                            <option value="Baja California">Baja California</option>
                                                        </select>
                                                    <label for="tutor_lengua">Lengua materna</label>
							<input type="text" class="form-control" placeholder="Lengua materna" name="" id="" value="" required>
                                                    <label for="tutor_parentesco">Parentesco con el alumno</label>
                                                        <input type="text" class="form-control" placeholder="Parentesco Alumno" name="" id="" value="" required>
                                                    <h4><b>Identificacion del padre o tutor</b></h4>
                                                    <label for="tutor_documento">Tipo de documento oficial</label>
							<input type="text" class="form-control" placeholder="Tipo de documento" name="" id="" value="" required>
                                                    <label for="tutor_folio">Folio documento oficial</label>
							<input type="text" class="form-control" placeholder="Folio documento" name="" id="" value="" required>        
                                                                                
                                                    <br/>
                                                    <div class="form-group breadcrumb text-blue">
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
						</div>
								
							<div class="form-group breadcrumb text-blue">
                                                            <h4><b>Direccion padre o tutor</b></h4>
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
                                                        <div class="form-group breadcrumb text-blue">
                                                            <h4><b>Datos de contactos Padre o tutor</b></h4>
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
								
									
                                    </div>
                                </div>
						<div class="text-right">
							<button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url();?>empresas';" title="Cancelar">
								<i class="fa fa-close"> Cancelar</i>
							</button>
							<button type="button" class="btn btn-info" onclick="closeFrom();" title="Cancelar">
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
<?php echo $db['empresa_id'];?>


empresa_id
empresa_razonSocial
empresa_nombre
empresa_rfc
empresa_telefono
empresa_email1
empresa_email2
empresa_direccion_id
empresa_contacto_id
direccion_id
direccion_pais
direccion_estado
direccion_municipio
direccion_ciudad
direccion_colonia
direccion_codigoPostal
direccion_calle
direccion_numeroExterior
contacto_id
contacto_apellidoMaterno
contacto_apellidoPaterno
contacto_fotografía
contacto_teléfono'=>$key['contacto_teléfono'],								'contacto_teléfonoMovil'=>$key['contacto_teléfonoMovil'],
contacto_email1'=>$key['contacto_email1'],								'contacto_email2'=>$key['contacto_email2'],										'cantidad'=>0
