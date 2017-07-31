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
                                <div class="col-xs-4">
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <label><b>Grupo</b></label>
                                                <div class="form-group">
                                                    <select>
                                                        <option value="volvo">Volvo</option>
                                                        <option value="saab">Saab</option>
                                                        <option value="mercedes">Mercedes</option>
                                                        <option value="audi">Audi</option>
                                                    </select>
                                                </div>
                                            <label><b>Materia</b></label>
                                                <div class="form-group">
                                                    <select>
                                                        <option value="volvo">Volvo</option>
                                                        <option value="saab">Saab</option>
                                                        <option value="mercedes">Mercedes</option>
                                                        <option value="audi">Audi</option>
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
                                                    <option>Luis</option>
                                                    <option>Maria</option>
                                                    <option>Domm</option>
                                                    <option>Carlos</option>
                                                    <option>Laura</option>
                                                    <option>Matias</option>
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
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_primerMes" id="calificaciones_primerMes" value="" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">2</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_segundoMes" id="calificaciones_segundoMes" value="" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">3</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_tercerMes" id="calificaciones_tercerMes" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">4</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_cuartoMes" id="calificaciones_cuartoMes" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">5</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_quintoMes" id="calificaciones_quintoMes" required/></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="width: 10px">6</th>
                                                                <th style="width: 20px">Unidad</th>
                                                                <th style="width: 40px"><input type="number" step="any" name="calificaciones_sextoMes" id="calificaciones_sextoMes" required/></th>
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