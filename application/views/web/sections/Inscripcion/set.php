<section class="content-header">
	<h1>
		inscripción
		<small>Edit</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url();?>inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
		<li class="active"><a href="<?php echo base_url();?>empresas">Inscripcion</a></li>
		<li class="active">Edit</li>
	</ol>
</section>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-9-center">
            <div class="box box-primary">
            <?php 
            $a['estudiante_id']                     =  NULL;
            $a['estudiante_nombre']                 =  NULL;
            $a['estudiante_apellidos']              =  NULL;
            $a['estudiante_curp']                   =  NULL;
            $a['estudiante_genero']                 =  NULL;
            $a['estudiante_estadoCivil']            =  NULL;
            $a['estudiante_nacionalidad']           =  NULL;
            $a['estudiante_estado_nacimiento']      =  NULL;
            $a['estudiante_lenguaMaterna']          =  NULL;
            $a['estudiante_tipoDocumento']          =  NULL;
            $a['estudiante_folioDocumento']         =  NULL;
            $a['estudiante_necesidadEducativa']     =  NULL;
            $a['estudiante_observaciones']          =  NULL;
            $a['tutor_id']                          =  NULL;
            $a['tutor_nombre']                      =  NULL;
            $a['tutor_apellidos']                   =  NULL;
            $a['tutor_curp']                        =  NULL;
            $a['tutor_estadoCivil']                 =  NULL;
            $a['tutor_gradoEstudios']               =  NULL;
            $a['tutor_nacionalidad']                =  NULL;
            $a['tutor_EstadoNacimiento']            =  NULL;
            $a['tutor_genero']                      =  NULL;
            $a['tutor_parentescoAlumno']            =  NULL;
            $a['tutor_lenguaMaterna']               =  NULL;
            $a['tutor_tipoDocumento']               =  NULL;
            $a['tutor_folioDocumento']              =  NULL;
            $a['contacto_id']                       =  NULL;
            $a['contacto_telefono']                 =  NULL;
            $a['contacto_celular']                  =  NULL;
            $a['contacto_redesSociales']            =  NULL;
            $a['contacto_correo']                   =  NULL;
            
            foreach ($get as $key) {
                    $a['estudiante_id']                     =  $key['estudiante_id'];
                    $a['estudiante_nombre']                 =  $key['estudiante_nombre'];
                    $a['estudiante_apellidos']              =  $key['estudiante_apellidos'];
                    $a['estudiante_curp']                   =  $key['estudiante_curp'];
                    $a['estudiante_genero']                 =  $key['estudiante_genero'];
                    $a['estudiante_estadoCivil']            =  $key['estudiante_estadoCivil'];
                    $a['estudiante_nacionalidad']           =  $key['estudiante_nacionalidad'];
                    $a['estudiante_estado_nacimiento']      =  $key['estudiante_estado_nacimiento'];
                    $a['estudiante_lenguaMaterna']          =  $key['estudiante_lenguaMaterna'];
                    $a['estudiante_tipoDocumento']          =  $key['estudiante_tipoDocumento'];
                    $a['estudiante_folioDocumento']         =  $key['estudiante_folioDocumento'];
                    $a['estudiante_necesidadEducativa']     =  $key['estudiante_necesidadEducativa'];
                    $a['estudiante_observaciones']          =  $key['estudiante_observaciones'];
                    $a['tutor_id']                          =  $key['tutor_id'];
                    $a['tutor_nombre']                      =  $key['tutor_nombre'];
                    $a['tutor_apellidos']                   =  $key['tutor_apellidos'];
                    $a['tutor_curp']                        =  $key['tutor_curp'];
                    $a['tutor_estadoCivil']                 =  $key['tutor_estadoCivil'];
                    $a['tutor_gradoEstudios']               =  $key['tutor_gradoEstudios'];
                    $a['tutor_nacionalidad']                =  $key['tutor_nacionalidad'];
                    $a['tutor_EstadoNacimiento']            =  $key['tutor_EstadoNacimiento'];
                    $a['tutor_genero']                      =  $key['tutor_genero'];
                    $a['tutor_parentescoAlumno']            =  $key['tutor_parentescoAlumno'];
                    $a['tutor_lenguaMaterna']               =  $key['tutor_lenguaMaterna'];
                    $a['tutor_tipoDocumento']               =  $key['tutor_tipoDocumento'];
                    $a['tutor_folioDocumento']              =  $key['tutor_folioDocumento'];
                    $a['contacto_id']                       =  $key['contacto_id'];
                    $a['contacto_telefono']                 =  $key['contacto_telefono'];
                    $a['contacto_celular']                  =  $key['contacto_celular'];
                    $a['contacto_redesSociales']            =  $key['contacto_redesSociales'];
                    $a['contacto_correo']                   =  $key['contacto_correo'];
            } ?>
                <div class="box box-info" id="from-view">
                    <form id="form" role="form" action="<?php echo base_url().'index.php/'.$titulo.'-proc';?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group text-center">
                                <div class="col-xs-6">
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Datos del alumno</b></h4>
                                        <label for="contacto_nombre">Nombre(s)</label>
                                            <input type="text" class="form-control"  placeholder="" name="estudiante_nombre" id="estudiante_nombre" value="estudiante_nombre" required>
					<label for="contacto_apellidoMaterno">Apellidos</label>
                                            <input type="text" class="form-control"  placeholder="" name="estudiante_apellidos" id="estudiante_apellidos" value="estudiante_apellidos" required>
					<label for="contacto_apellidoPaterno">CURP</label>
                                            <input type="text" class="form-control"  placeholder="" name="estudiante_curp" id="estudiante_curp" value="estudiante_curp" required>
                                        <h4 class="box-title" ><b>Genero</b></h4>
                                            <input type="radio" name="estudiante_genero" class="minimal"  id="estudiante_genero" value="" required>Masculino
                                            <input type="radio" name="estudiante_genero" class="minimal" checked=""  id="estudiante_genero" value="" required>Femenino
                                            <ins class="iCheck-helper"></ins>
                                        <h4 class="box-title" ><b>Estado civil</b></h4>
                                            <input type="radio" name="estudiante_estadoCivil" class="minimal" id="estudiante_estadoCivil" value="" required>Soltero(@)
                                            <input type="radio" name="estudiante_estadoCivil" class="minimal" id="estudiante_estadoCivil" value="" required>Casado(@)
                                            <ins class="iCheck-helper"></ins>
                                        <label for="contacto_apellidoPaterno">Nacionalidad</label>
                                            <input type="text" class="form-control"  placeholder="" name="estudiante_nacionalidad" id="estudiante_nacionalidad" value="estudiante_nacionalidad" required>
                                            <br/>
                                        <label for="contacto_nombre">Estado de nacimiento</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona estado" style="width: 100%;" tabindex="-1" aria-hidden="true" name="estudiante_estado_nacimiento" id="estudiante_estado_nacimiento" value="" required>
                                                <?php for ($b=0;$b<10;$b++){
                                            echo '<option value="'.$b.'"';
                                            if($b == $a['estudiante_id']){ echo 'selected'; }
                                            echo '>'.$b.'</option>';
                                        } ?>>
                                            </select>
                                        <label for="contacto_apellidoPaterno">Lengua materna</label>
                                            <input type="text" class="form-control"  placeholder="" name="estudiante_lenguaMaterna" id="estudiante_lenguaMaterna" value="estudiante_lenguaMaterna" required>
                                        <label for="contacto_apellidoPaterno">Tipo de documento oficial</label>
                                            <input type="text" class="form-control"  placeholder="" name="estudiante_tipoDocumento" id="estudiante_tipoDocumento" value="estudiante_tipoDocumento" required>
                                        <label for="contacto_apellidoPaterno">Folio documento oficial</label>
                                            <input type="number" class="form-control"  placeholder="" name="estudiante_folioDocumento" id="estudiante_folioDocumento" value="estudiante_folioDocumento" required>
					<label for="contacto_apellidoPaterno">Necesidades educativas</label>
                                            <input type="text" class="form-control"  placeholder="" name="estudiante_necesidadEducativa" id="estudiante_necesidadEducativa" value="estudiante_necesidadEducativa" required>
					<label for="contacto_teléfono">Observaciones</label>
                                                <input type="text" class="form-control" placeholder="" name="estudiante_observaciones" id="estudiante_observaciones" value="estudiante_observaciones" required>
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
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot; 9999-9999&quot;" data-mask="" name="contacto_telefono" id="contacto_telefono" value="contacto_telefono" required>
                                        </div>
                                        <h4 class="box-title"><b>Celular</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" name="contacto_celular" id="contacto_celular" value="contacto_celular" required>
                                            </div>
                                        <h4 class="box-title" ><b>Red Social</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            <input type="text" class="form-control" placeholder="Facebook" name="contacto_redesSociales" id="contacto_redesSociales" value="contacto_redesSociales" required>
                                            </div>
                                        <h4 class="box-title"><b>Correo</b></h4>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="Email" name="contacto_correo" id="contacto_correo" value="contacto_correo">
                                            </div>
                                        <br/>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <h3 class="box-title" ><b>Direccion del alumno</b></h3>
                                    <h4><b>Calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Calle" name="direccion_calle" id="direccion_calle" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entre calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="1 calle" name="direccion_entreCalles1" id="direccion_entreCalles1" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b> Y calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="2 Calle" name="direccion_entreCalles2" id="direccion_entreCalles2" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="numero" name="direccion_numero" id="direccion_numero" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Manzana</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_manzana" id="direccion_manzana" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Lote</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_lote" id="direccion_lote" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero interior</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_numeroInterior" id="direccion_numeroInterior" value="0" required>
                                        </div>
                                    
                                    <h4 class="box-title" ><b>Departamento</b></h4>
                                            <input type="radio"  class="minimal" name="direccion_departamento" id="direccion_departamento" value="" required>SI
                                            <input type="radio"  class="minimal" checked="" name="direccion_departamento" id="direccion_departamento" value="" required>NO
                                            <ins class="iCheck-helper"></ins>
                                    <h4 class="box-title" ><b>Referencia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Referencias de tu domicilio" name="direccion_referencia" id="direccion_referencia" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Codigo postal</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="number" class="form-control" placeholder="CP" name="direccion_cp" id="direccion_cp" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Colonia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Colonia" name="direccion_colonia" id="direccion_colonia" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entidad federativa</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Ciudad donde vive" name="direccion_entidadFederativa" id="direccion_entidadFederativa" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Municipio</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Municipio" name="direccion_municipio" id="direccion_municipio" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Localidad</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Localidad" name="direccion_localidad" id="direccion_localidad" value="" required>
                                        </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group breadcrumb text-blue">
                                        <h4><b>Datos del tutor</b></h4>
                                        <label for="contacto_nombre">Nombre(s)</label>
                                            <input type="text" class="form-control"  placeholder="" name="tutor_nombre" id="tutor_nombre" value="" required>
					<label for="contacto_apellidoMaterno">Apellidos</label>
                                            <input type="text" class="form-control"  placeholder="" name="tutor_apellidos" id="tutor_apellidos" value="" required>
					<label for="contacto_apellidoPaterno">CURP</label>
                                            <input type="text" class="form-control"  placeholder="" name="tutor_curp" id="tutor_curp" value="" required>
                                        <h4 class="box-title" ><b>Genero</b></h4>
                                            <input type="radio" class="minimal" name="tutor_genero" id="tutor_genero" value="" required>Masculino
                                            <input type="radio" class="minimal" checked="" name="tutor_genero" id="tutor_genero" value="" required>Femenino
                                            <ins class="iCheck-helper"></ins>
                                        <h4 class="box-title" ><b>Estado civil</b></h4>
                                            <input type="radio" class="minimal" name="tutor_estadoCivil" id="tutor_estadoCivil" value="" required>Soltero(@)
                                            <input type="radio" class="minimal" name="tutor_estadoCivil" id="tutor_estadoCivil" value="" required>Casado(@)
                                            <input type="radio" class="minimal" name="tutor_estadoCivil" id="tutor_estadoCivil" value="" required>Divorciado(@)
                                            <input type="radio" class="minimal" name="tutor_estadoCivil" id="tutor_estadoCivil" value="" required>Viudo(@)
                                            <input type="radio" class="minimal" name="tutor_estadoCivil" id="tutor_estadoCivil" value="" required>Union libre
                                            <ins class="iCheck-helper"></ins>
                                        <label for="contacto_apellidoPaterno">Nacionalidad</label>
                                            <input type="text" class="form-control"  placeholder="" name="tutor_nacionalidad" id="tutor_nacionalidad" value="" required>
                                            <br/>
                                        <label for="contacto_nombre">Estado de nacimiento</label>
                                            <select class="form-control select2 select2-hidden-accessible" data-placeholder="Selecciona estado" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tutor_EstadoNacimiento" id="tutor_EstadoNacimiento" value="" required>
                                                <?php for ($b=0;$b<10;$b++){
                                                    echo '<option value="'.$b.'"';
                                                    if($b == $a['tutor_id']){ echo 'selected'; }
                                                    echo '>'.$b.'</option>';
                                                } ?>
                                            </select>
                                        <label for="contacto_apellidoPaterno">Lengua materna</label>
                                            <input type="text" class="form-control"  placeholder="" name="tutor_lenguaMaterna" id="tutor_lenguaMaterna" value="" required>
                                        <label for="contacto_apellidoPaterno">Tipo de documento oficial</label>
                                            <input type="text" class="form-control"  placeholder="" name="tutor_tipoDocumento" id="tutor_tipoDocumento" value="" required>
                                        <label for="contacto_apellidoPaterno">Folio documento oficial</label>
                                            <input type="number" class="form-control"  placeholder="" name="tutor_folioDocumento" id="tutor_folioDocumento" value="" required>
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
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot; 9999-9999&quot;" data-mask="" name="contacto_telefono" id="contacto_telefono" value="" required>
                                        </div>
                                        <h4 class="box-title"><b>Celular</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" name="contacto_celular" id="contacto_celular" value="" required>
                                            </div>
                                        <h4 class="box-title" ><b>Red Social</b></h4>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            <input type="text" class="form-control" placeholder="Facebook" name="contacto_redesSociales" id="contacto_redesSociales" value="" required>
                                            </div>
                                        <h4 class="box-title"><b>Correo</b></h4>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="Email" name="contacto_correo" id="contacto_correo">
                                            </div>
                                        <br/>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <h3 class="box-title" ><b>Direccion del tutor</b></h3>
                                    <h4><b>Calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Calle" name="direccion_calle" id="direccion_calle" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entre calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="1 calle" name="direccion_entreCalles1" id="direccion_entreCalles1" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b> Y calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="2 Calle" name="direccion_entreCalles2" id="direccion_entreCalles2" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="numero" name="direccion_numero" id="direccion_numero" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Manzana</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_manzana" id="direccion_manzana" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Lote</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_lote" id="direccion_lote" value="0" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero interior</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_numeroInterior" id="direccion_numeroInterior" value="0" required>
                                        </div>
                                    
                                    <h4 class="box-title" ><b>Departamento</b></h4>
                                            <input type="radio" name="r1" class="minimal" name="direccion_departamento" id="direccion_departamento" value="" required>SI
                                            <input type="radio" name="r1" class="minimal" checked="" name="direccion_departamento" id="direccion_departamento" value="" required>NO
                                            <ins class="iCheck-helper"></ins>
                                    <h4 class="box-title" ><b>Referencia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Referencias de tu domicilio" name="direccion_referencia" id="direccion_referencia" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Codigo postal</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="number" class="form-control" placeholder="CP" name="direccion_cp" id="direccion_cp" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Colonia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Colonia" name="direccion_colonia" id="direccion_colonia" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entidad federativa</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Ciudad donde vive" name="direccion_entidadFederativa" id="direccion_entidadFederativa" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Municipio</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Municipio" name="direccion_municipio" id="direccion_municipio" value="" required>
                                        </div>
                                    <h4 class="box-title" ><b>Localidad</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Localidad" name="direccion_localidad" id="direccion_localidad" value="" required>
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
                            <input type="number" name="inscripcion_id" id="actividades_id" value="<?php echo $a['inscripcion_id'];?>" style="display: none;">
                            </form>
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</section>
