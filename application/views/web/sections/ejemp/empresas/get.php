<section class="content-header">
	<h1>
		Empresas
		<small>---</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
		<li class="active">Empresas</li>
	</ol>
</section>
<section class="content">
  <div class="row">
		<div class="col-md-9-center">
      <div class="box box-primary">
				<div class="box-header with-border pull-right">
					<button type="button" class="btn btn-block btn-primary" id="newFrom-view" onclick="window.location.href='<?php echo base_url();?>empresas/edit/0';" title="Nuevo">
						<i class="fa fa-plus"> Nuevo</i>
					</button>
				</div>
				<br/>
        <div class="box-body">
		    	<table id="data_tabla_map1" class="table table-bordered table-striped">
	        	<thead>
    					<tr>
              	<th>ID</th>
                <th>Razón social</th>
                <th>Nombre comercial</th>
                <th>Telefono</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
          		</tr>
            </thead>
            <tbody>
			      	<?php foreach ($get as $db) { ?>
							<tr>
            		<td><?php echo $db['empresa_id'];?></td>
	              <td><b><?php echo $db['empresa_razonSocial'];?></b></td>
	              <td><b><?php echo $db['empresa_nombre'];?></b></td>
	              <td><?php echo $db['contacto_teléfono'];?></td>
	              <td>
									<button type="button" class="btn btn-default btn-sm" onclick=""><i class="fa fa-file-pdf-o"></i></button>
								</td>
	              <td>
				          <button type="button" class="btn btn-default btn-sm" onclick='window.location.href="<?php echo base_url().'empresas/edit/'.$db['empresa_id'];?>";'><i class="fa fa-pencil"></i></button>
								</td>
		            <td>
			          	<button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
								</td>
	             	<td>
					      	<span class="label bg-gray pull-right">
										<i class="fa fa-institution"></i> <?php echo $db['cantidad'];?>
					        </span>
								</td>
	             </tr>
			      	<?php } ?>
			       </tbody>
    			</table>
				</div>
			</div>
    </div>
	</div>
</section>
