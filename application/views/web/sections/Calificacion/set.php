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
            $a['calificaciones_id']             =  NULL;
            $a['grupo_id']                      =  NULL;
            $a['materias_id']                   =  NULL;
            $a['materias_nombre']               =  NULL;
            $a['estudiante_id']                 =  NULL;
            $a['estudiante_nombre']             =  NULL;
            $a['calificaciones_primerMes']      =  NULL;
            $a['calificaciones_segundoMes']     =  NULL;
            $a['calificaciones_tercerMes']      =  NULL;
            $a['calificaciones_cuartoMes']      =  NULL;
            $a['calificaciones_quintoMes']      =  NULL;
            $a['calificaciones_sextoMes']       =  NULL;
            foreach ($get as $key) {
                    $a['calificaciones_id']             =  $key['calificaciones_id'];
                    $a['grupo_id']                      =  $key['grupo_id'];
                    $a['materias_id']                   =  $key['materias_id'];
                    $a['materias_nombre']               =  $key['materias_nombre'];
                    $a['estudiante_id']                 =  $key['estudiante_id'];
                    $a['estudiante_nombre']             =  $key['estudiante_nombre'];
                    $a['calificaciones_primerMes']      =  $key['calificaciones_primerMes'];
                    $a['calificaciones_segundoMes']     =  $key['calificaciones_segundoMes'];
                    $a['calificaciones_tercerMes']      =  $key['calificaciones_tercerMes'];
                    $a['calificaciones_cuartoMes']      =  $key['calificaciones_cuartoMes'];
                    $a['calificaciones_quintoMes']      =  $key['calificaciones_quintoMes'];
                    $a['calificaciones_sextoMes']       =  $key['calificaciones_sextoMes'];
            } ?>
                <div class="box box-info" id="from-view">
                    <form id="form" role="form" action="<?php echo base_url().'index.php/'.$titulo.'-proc';?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group text-center">
                                <div class="col-xs-4">
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <label><b>Grupo</b></label>
                                                <div class="form-group" name="grupo_id" id="grupo_id">
                                                    <select>
                                                        <?php for ($b=0;$b<10;$b++){
                                                            echo '<option value="'.$b.'"';
                                                            if($b == $a['grupo_id']){ echo 'selected'; }
                                                            echo '>'.$b.'</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                            <label><b>Materia</b></label>
                                                <div class="form-group" name="materias_id" id="materias_id">
                                                    <select>
                                                        <?php for ($b=0;$b<10;$b++){
                                                            echo '<option value="'.$b.'"';
                                                            if($b == $a['materias_id']){ echo 'selected'; }
                                                            echo '>'.$b.'</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <label><h4 class="box-title"><b>Alumno</b></h4></label>
                                                <select class="form-control select2" data-placeholder="Selecciona alumno" style="width: 100%;">
                                                    <?php for ($b=0;$b<10;$b++){
                                                        echo '<option value="'.$b.'"';
                                                        if($b == $a['estudiante_id']){ echo 'selected'; }
                                                        echo '>'.$b.'</option>';
                                                    } ?>
                                                </select>
                                            <div class="box">
                                                <div class="box-header">
                                                    <h4 class="box-title"><b>Calificaciones</b></h4>
                                                </div>
                                                <div class="box-body no-padding">
                                                    <table class="table table-condensed">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 10px">1</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_primerMes" id="calificaciones_primerMes" value="<?php echo $a['calificaciones_primerMes'];?>" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">2</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_segundoMes" id="calificaciones_segundoMes" value="<?php echo $a['calificaciones_segundoMes'];?>" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">3</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_tercerMes" id="calificaciones_tercerMes" value="<?php echo $a['calificaciones_tercerMes'];?>" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">4</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_cuartoMes" id="calificaciones_cuartoMes" value="<?php echo $a['calificaciones_cuartoMes'];?>" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">5</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_quintoMes" id="calificaciones_quintoMes" value="<?php echo $a['calificaciones_quintoMes'];?>" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">6</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_sextoMes" id="calificaciones_sextoMes" value="<?php echo $a['calificaciones_sextoMes'];?>" required/></th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                        <input type="number" name="calificaciones_id" id="actividades_id" value="<?php echo $a['calificaciones_id'];?>" style="display: none;">
                    </form>
                </div>
            
            </div>
        </div>
    </div>
</section>