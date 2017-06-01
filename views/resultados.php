<?php include 'header.php'; ?>

<section class="content-header no-index">
    <div class="info-box">
    	<span class="info-box-icon" style="background-color: white;"><i class="fa fa-file-text-o"></i></span>
    	<div class="info-box-content">
          	<h2 class="info-box-text"><b>Panel de Gestion de Resultados</b></h2>
          	<span class="info-box-number" style="font-weight: normal;">A continuacion podra gestionar todos los resultados que se han registrado en el sistema</span>
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
	<!-- Your Page Content Here -->
	<div class="box box-danger">
		<div class="box-header with-border">
	      	<h3 class="box-title"><b>Listado de Resultados Registrados</b></h3>
	    </div>
	    <div class="box-body">	
	    	<table id="example" class=" display table table-bordered table-striped dataTable" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Codigo Deportista</th>
		                <th>Posicion del Deportista</th>
		                <th>Codigo Competencia</th>
		                <th>Nombre de Competencia</th>
		                <th style="width: 100px;">Acción</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
			        	foreach ($comp['competencias'] as $val) {
		        			if(!empty($val["resultado"])) {
			        			print('
					        	<tr>
					        		<td>'.$val["resultado"][0]['codDeportista'].'</td>
					                <td>'.$val["resultado"][0]['posicion'].'</td>
					                <td>'.$val['_id'].'</td>
					                <td>'.$val['descripcion'].'</td>
				                	<td style="vertical-align: middle;text-align: center;">
					                	<button id="delete-res" data-id='.$val['_id'].' class="btn btn-sm btn-danger btn-delete-doc" title="Eliminar">
					                		<i class="fa fa-trash"></i>
					                	</button>
					                	<button data-whatever="actualizar" data-toggle="modal" data-target="#modal-resultados" class="btn btn-sm btn-danger btn-delete-doc" title="Actualizar">
					                		<i class="fa fa-refresh"></i>
					                	</button>
					                </td>
					        	</tr>');
						    }else {
						    	break;
						    	echo "string";
						    }
					    }
			        ?>
		        </tbody>
		    </table>  
	    </div>
	</div>    	
</section>
<!-- /.content -->
<!-- Modal cargar archivos -->
<div class="modal fade modal-danger" id="modal-resultados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title" id="myModalLabel">Formulario para Registro de Resultados</h4>
      	</div>
      		<form id="form-resultados">
      		<input type="hidden" value="" id="type-action">
      			<div class="modal-body">
					<div class="form-group">
	                  	<label for="titulo">Deportista</label>
	                  	<select name="deportista-res" id="deportista-res" class="form-control">
	                  		<option value="">Seleccione</option>
	                  		<option value="1234">Codigo 1</option>
	                  	</select>
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Competencia</label>
	                  	<select name="competencia-res" id="competencia-res" class="form-control">
	                  		<option value="">Selecciones</option>
	                  		<?php  
	                  			foreach ($comp['competencias'] as $val) {
	                  				print('
										<option value="'.$val['descripcion'].'">'.$val['descripcion'].'</option>');
	                  			}

	                  		?>
	                  	</select>
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Posicion del deportista</label>
	                  	<input type="number" class="form-control" name="posicion-res" id="posicion-res" placeholder="Posicion">
	                </div>
	            </div>
	            <div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			    	<button type="button" class="btn btn-primary" id="btn-save-res">Guardar</button>
			  	</div>
			</form>
    	</div>
  	</div>
</div>
<!-- BTN floating modal -->
<button class="btn btn-danger btn-fixed" data-whatever="registrar" data-toggle="modal" data-target="#modal-resultados"><i class="fa fa-upload"></i></button>

<?php include 'footer.php'; ?>