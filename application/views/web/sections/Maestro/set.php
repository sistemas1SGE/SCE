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
            $a['maestros_id']                   =  NULL;
            $a['maestros_nombres']              =  NULL;
            $a['maestros_apellidos']            =  NULL;
            $a['maestros_ineFolio']             =  NULL;
            $a['maestros_especialidad']         =  NULL;
            $a['rol_id']                        =  NULL;
            $a['contacto_id']                   =  NULL;
            $a['direccion_id']                  =  NULL;
            $a['contacto_telefono']             =  NULL;
            $a['contacto_celular']              =  NULL;
            $a['contacto_redesSociales']        =  NULL;
            $a['contacto_correo']               =  NULL;
            $a['direccion_calle']               =  NULL;
            $a['direccion_entreCalles1']        =  NULL;
            $a['direccion_entreCalles2']        =  NULL;
            $a['direccion_numero']              =  NULL;
            $a['direccion_manzana']             =  NULL;
            $a['direccion_lote']                =  NULL;
            $a['direccion_numeroInterior']      =  NULL;
            $a['direccion_departamento']        =  NULL;
            $a['direccion_referencia']          =  NULL;
            $a['direccion_cp']                  =  NULL;
            $a['direccion_colonia']             =  NULL;
            $a['direccion_entidadFederativa']   =  NULL;
            $a['direccion_municipio']           =  NULL;
            $a['direccion_localidad']           =  NULL;
            foreach ($get as $key) {
                    $a['maestros_id']                   =  $key['maestros_id'];
                    $a['maestros_nombres']              =  $key['maestros_nombres'];
                    $a['maestros_apellidos']            =  $key['maestros_apellidos'];
                    $a['maestros_ineFolio']             =  $key['maestros_ineFolio'];
                    $a['maestros_especialidad']         =  $key['maestros_especialidad'];
                    $a['rol_id']                        =  $key['rol_id'];
                    $a['contacto_id']                   =  $key['contacto_id'];
                    $a['direccion_id']                  =  $key['direccion_id'];
                    $a['contacto_telefono']             =  $key['contacto_telefono'];
                    $a['contacto_celular']              =  $key['contacto_celular'];
                    $a['contacto_redesSociales']        =  $key['contacto_redesSociales'];
                    $a['contacto_correo']               =  $key['contacto_correo'];
                    $a['direccion_calle']               =  $key['direccion_calle'];
                    $a['direccion_entreCalles1']        =  $key['direccion_entreCalles1'];
                    $a['direccion_entreCalles2']        =  $key['direccion_entreCalles2'];
                    $a['direccion_numero']              =  $key['direccion_numero'];
                    $a['direccion_manzana']             =  $key['direccion_manzana'];
                    $a['direccion_lote']                =  $key['direccion_lote'];
                    $a['direccion_numeroInterior']      =  $key['direccion_numeroInterior'];
                    $a['direccion_departamento']        =  $key['direccion_departamento'];
                    $a['direccion_referencia']          =  $key['direccion_referencia'];
                    $a['direccion_cp']                  =  $key['direccion_cp'];
                    $a['direccion_colonia']             =  $key['direccion_colonia'];
                    $a['direccion_entidadFederativa']   =  $key['direccion_entidadFederativa'];
                    $a['direccion_municipio']           =  $key['direccion_municipio'];
                    $a['direccion_localidad']           =  $key['direccion_localidad'];
                    
            } ?>
            
                <div class="box box-info" id="from-view">
                    <form id="form" role="form" action="<?php echo base_url().'index.php/'.$titulo.'-proc';?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group text-center">
                                <div class="col-xs-6">
                                    <h4 class="box-title"><b>Nombre(s)</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-font"></i>
                                            </div>
                                        <input type="text" class="form-control" placeholder="Nombre" name="maestros_nombres" id="maestros_nombres" value="<?php echo $a['maestros_nombres'];?>" required>
                                        </div>
                                            <h4 class="box-title"><b>Apellidos</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-font"></i>
                                            </div>
                                        <input type="text" class="form-control" placeholder="Apellidos" name="maestros_apellidos" id="maestros_apellidos" value="<?php echo $a['maestros_apellidos'];?>" required>
                                        </div>
                                            <h4 class="box-title"><b>Folio de INE</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-list-alt"></i>
                                            </div>
                                        <input type="text" class="form-control" placeholder="INE" name="maestros_ineFolio" id="maestros_ineFolio" value="<?php echo $a['maestros_ineFolio'];?>" required>
                                        </div>
                                            <h4 class="box-title"><b>Especialidad</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-black-tie"></i>
                                            </div>
                                        <input type="text" class="form-control" placeholder="Especialidad" name="maestros_especialidad" id="maestros_especialidad" value="<?php echo $a['maestros_especialidad'];?>" required>
                                        </div>
                                        <br/>
                                </div>
                                <div class="col-xs-6">
                                    <h4 class="box-title"><b>Telefono</b></h4>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot; 9999-9999&quot;" data-mask="" name="contacto_telefono" id="contacto_telefono" value="<?php echo $a['contacto_telefono'];?>" required>
                                    </div>
                                    <h4 class="box-title"><b>Celular</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" name="contacto_celular" id="contacto_celular" value="<?php echo $a['contacto_celular'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Red Social</b></h4>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                        <input type="text" class="form-control" placeholder="Facebook" name="contacto_redesSociales" id="contacto_redesSociales" value="<?php echo $a['contacto_redesSociales'];?>" required>
                                        </div>
                                    <h4 class="box-title"><b>Correo</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" placeholder="Email" name="contacto_correo" id="contacto_correo" value="<?php echo $a['contacto_correo'];?>">
                                        </div>
                                </div> 
                                <div class="col-xs-12">
                                    <h3 class="box-title" ><b>Direccion</b></h3>
                                    <h4><b>Calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Calle" name="direccion_calle" id="direccion_calle" value="<?php echo $a['direccion_calle'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entre calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="1 calle" name="direccion_entreCalles1" id="direccion_entreCalles1" value="<?php echo $a['direccion_entreCalles1'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b> Y calle</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="2 Calle" name="direccion_entreCalles2" id="direccion_entreCalles2" value="<?php echo $a['direccion_entreCalles2'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="numero" name="direccion_numero" id="direccion_numero" value="<?php echo $a['direccion_numero'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Manzana</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_manzana" id="direccion_manzana" value="<?php echo $a['direccion_manzana'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Lote</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_lote" id="direccion_lote" value="<?php echo $a['direccion_lote'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Numero interior</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombre" name="direccion_numeroInterior" id="direccion_numeroInterior" value="<?php echo $a['direccion_numeroInterior'];?>" required>
                                        </div>
                                    
                                    <h4 class="box-title" ><b>Departamento</b></h4>
                                            <input type="radio" class="minimal" name="direccion_departamento" id="direccion_departamento" value="<?php echo $a['direccion_departamento'];?>" required>SI
                                            <input type="radio" class="minimal" checked="" name="direccion_departamento" id="direccion_departamento" value="<?php echo $a['direccion_departamento'];?>" required>NO
                                            <ins class="iCheck-helper"></ins>
                                    <h4 class="box-title" ><b>Referencia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Referencias de tu domicilio" name="direccion_referencia" id="direccion_referencia" value="<?php echo $a['direccion_referencia'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Codigo postal</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="number" class="form-control" placeholder="CP" name="direccion_cp" id="direccion_cp" value="<?php echo $a['direccion_cp'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Colonia</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Colonia" name="direccion_colonia" id="direccion_colonia" value="<?php echo $a['direccion_colonia'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Entidad federativa</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Ciudad donde vive" name="direccion_entidadFederativa" id="direccion_entidadFederativa" value="<?php echo $a['direccion_entidadFederativa'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Municipio</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Municipio" name="direccion_municipio" id="direccion_municipio" value="<?php echo $a['direccion_municipio'];?>" required>
                                        </div>
                                    <h4 class="box-title" ><b>Localidad</b></h4>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dedent"></i></span>
                                        <input type="text" class="form-control" placeholder="Localidad" name="direccion_localidad" id="direccion_localidad" value="<?php echo $a['direccion_localidad'];?>" required>
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