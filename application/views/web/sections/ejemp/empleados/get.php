				<section class="content-header">
					<h1>
						Empleados
						<small>---</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
						<li class="active">Empleados</li>
					</ol>
				</section>
				<section class="content">
				    <div class="row">
						<div class="col-md-3">
							<div class="box box-solid">
				            	<div class="box-body no-padding">
				              		<ul class="nav nav-pills nav-stacked">
										<li>
											<div class="box box-solid ">
									            <div class="box-header with-border">
													<h4 class="box-title">
														<b>Departamentos</b>
						   	            				<button type="button" class="btn btn-info btn-xs" id="newFrom-view" onclick="editFrom();" title="Nuevo">
						       		        				<i class="fa fa-plus"> Nuevo</i>
														</button>
													</h4>
									            </div>
									            <div class="box-body no-padding">
									        		<ul class="nav nav-pills nav-stacked">
													<?php
													$a=8;
													for($i=0;$i<5;$i++){
													echo '
														<li class="active">
										                	<a>
										                		<i class="fa fa-building"></i>Dep-'.$i.'
										                		<span class="label bg-gray pull-right">
																	<input type="checkbox" class="flat-red" checked>
																	<i class="fa fa-male"></i> '.$i.'
										                		</span>
										                	</a>
										                </li>
													';}
													?>
									        		</ul>
									            </div>
											</div>
										</li>
									</ul>
								</div>
							</div>
				        </div>
				        <div class="col-md-9">
					        <div class="box box-primary">
								<div class="box box-info collapse" id="from-view">
									<form role="form">
							        	<div class="box-body">
							                <div class="form-group">
								    			<div class="col-xs-6">
								            		<label for="nombreEmployees">Nombre</label>
														<input type="text" class="form-control" id="nombreEmployees" placeholder="">
								            		<label for="apellidosEmployees">Apellidos</label>
														<input type="text" class="form-control" id="apellidosEmployees" placeholder="">
								            		<label for="fotografiaEmployees">Fotografia</label>
														<input type="file" class="form-control" id="fotografiaEmployees" placeholder="">
								            		<label for="email1Employees">Primer E-mail</label>
														<div class="input-group">
									                		<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									                		<input type="email" class="form-control" id="email1Employees" placeholder="">
								    	          		</div>
								            		<label for="email2Employees">Segundo E-mail</label>
														<div class="input-group">
									                		<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								    	            		<input type="email" class="form-control" id="email2Employees" placeholder="">
								        	      		</div>
								            		<label for="fechaIngresoEmployees">Fecha de ingreso</label>
										                <div class="input-group date">
											                <div class="input-group-addon">
										    	                <i class="fa fa-calendar"></i>
										        	        </div>
										            	    <input type="text" class="form-control pull-right" id="datepicker">
										                </div>
								                </div>
								    			<div class="col-xs-6">
								            		<label for="telefonoEmployees">Telefono</label>
										                <div class="input-group">
										    	            <div class="input-group-addon">
										        				<i class="fa fa-phone"></i>
															</div>
															<input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask id="telefonoEmployees">
										                </div>
								            		<label for="telefonoMovilEmployees">Telefono movil</label>
										                <div class="input-group">
										    				<div class="input-group-addon">
											                    <i class="fa fa-phone"></i>
															</div>
															<input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask id="telefonoMovilEmployees">
										                </div>
													<label for="Employees"></label>
														<input type="text" class="form-control" id="Employees" placeholder="">
								            		<label for="direccionEmployees">Direccion</label>
														<input type="text" class="form-control" id="direccionEmployees" placeholder="">
								            		<label for="referenciaEmployees">Referencia</label>
														<input type="text" class="form-control" id="referenciaEmployees" placeholder="">
													<div class="box-body collapse" id="cloFrom-view" >
							   	            			<button type="button" class="btn btn-danger" onclick="closeFrom();" title="Cancelar">
							       		        			<i class="fa fa-close"> Cancelar</i>
														</button>
							   	            			<button type="button" class="btn btn-info" onclick="closeFrom();" title="Cancelar">
							       		        			<i class="fa fa-save"> Guardar</i>
														</button>
													</div>
								                </div>
							                </div>
							            </div>
									</form>
								</div>
				            	<div class="box-body">
						            <table id="data_tabla_map1" class="table table-bordered table-striped">
						                <thead>
		    								<tr>
					                    		<th>ID</th>
					                    		<th>Nombre</th>
					                    		<th>Apellidos</th>
					                    		<th>Fotografia</th>
					                    		<th>Telefono</th>
					                    		<th></th>
					                    		<th></th>
					                  		</tr>
					                    </thead>
						                <tbody>
							            	<?php
											for($i=0;$i<5;$i++){?>
											<tr>
					                    		<td><?php echo $i; ?></td>
					                    		<td><b><?php echo $i; ?></b></td>
					                    		<td><b><?php echo $i; ?></b></td>
					                    		<td>
								                    <img class="contacts-list-img" src="<?php echo base_url().'assets/';?>AdminLTE/dist/img/user1-128x128.jpg" alt="User Image">
					                    		</td>
					                    		<td><?php echo $i*111111111111111; ?></td>
					                    		<td>
							                  		<button type="button" class="btn btn-default btn-sm" onclick="editFrom();"><i class="fa fa-pencil"></i></button>
												</td>
					                    		<td>
							                  		<button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
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
