<?php include 'header.php'; ?>

<section class="content-header no-index">
    <div class="info-box">
    	<span class="info-box-icon" style="background-color: white;"><i class="fa fa-group"></i></span>
    	<div class="info-box-content">
          	<h2 class="info-box-text"><b>Panel de Gestion de Competencias</b></h2>
          	<span class="info-box-number" style="font-weight: normal;">A continuacion podra gestionar el listado de competencias</span>
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
	<!-- Your Page Content Here -->
	<div class="box box-danger">
		<div class="box-header with-border text-center">
	      	<h3 class="box-title" style="font-size: 1.5em;"><b>Listado de Competencias Registradas</b></h3>
	    </div>
	    <div class="box-body">
	    	<table id="example" class=" display table table-bordered table-striped dataTable" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Codigo Deporte</th>
		                <th>Nombre Deporte</th>
		                <th>Descripcion</th>
		                <th>Numero de Integrantes</th>
		                <th style="width: 100px;">Acción</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        		//var_dump($com['deportes']);
		        	if ($com['competencias']->next()) {
		        		foreach($com['competencias'] as $dep) {
			        		print('
					        	<tr>
					                <td>'.$dep["deporte"]['codDeporte'].'</td>
					        		<td>'.$dep["deporte"]['nombre'].'</td>
					                <td>'.$dep['descripcion'].'</td>
					                <td>'.$dep['numintegrantes'].'</td>
				                	<td style="vertical-align: middle;text-align: center;">
					                	<button class="btn btn-sm btn-danger btn-delete-doc" title="Eliminar" data-id="'.$dep['_id'].'" id="delete-com">
					                		<i class="fa fa-trash"></i>
					                	</button>
					                	<button data-toggle="modal" data-whatever="actualizar" data-target="#myModalArchivos" class="btn btn-sm btn-danger btn-delete-doc" title="Actualizar">
					                		<i class="fa fa-refresh"></i>
					                	</button>
					                </td>
					        	</tr>'
					        );
		        		}
			        } else {
			        	print('
				        	<tr class="text-center">
				        		<td colspan="5"><p>No hay competencias registradas</p></td>
				        	</tr>
				        ');
			         } ?>
		        </tbody>
		    </table>
	    </div
	</div>    	
</section>
<!-- /.content -->

<!-- Modal cargar archivos -->
<div class="modal fade modal-danger" id="myModalArchivos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title" id="myModalLabel">Formulario para Registro de Competencias</h4>
      	</div>
      		<form id="form-save-comp">
      			<input type="hidden" value="" id="type-action">
      			<div class="modal-body">
    				<div class="form-group">
	                  	<label for="titulo">Seleccione el deporte</label>
	                  	<select name="deporte" class="form-control" id="deporte-com">
	                  		<option value="">Seleccione</option>
	                  		<?php 
                  				foreach ($com['deportes'] as $val) {
                  					print("
										<option value='".$val['nombre']."'>".$val['nombre']."</option>
                  					");
                  				}
	                  		?>
	                  	</select>
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Descripcion de la Competencia</label>
	                  	<input type="text" id="descripcion-com" class="form-control" name="descripcion" placeholder="Descripcion">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Numero de Integrantes</label>
	                  	<input type="number" id="inte-com" class="form-control" name="integrantes" placeholder="Integrantes">
	                </div>
				</div>
				<div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			    	<button type="button" class="btn btn-primary" id="btn-save-comp">Guardar</button>
			  	</div>
    		</form>
    	</div>
  	</div>
</div>
<!-- BTN floating modal -->
<button class="btn btn-danger btn-fixed" data-whatever="registrar" data-toggle="modal" data-target="#myModalArchivos"><i class="fa fa-upload"></i></button>

<?php include 'footer.php'; ?>