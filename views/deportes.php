<?php include 'header.php'; ?>

<section class="content-header no-index">
    <div class="info-box">
    	<span class="info-box-icon" style="background-color: white;"><i class="fa fa-address-book-o"></i></span>
    	<div class="info-box-content">
          	<h2 class="info-box-text"><b>Panel de Gestion de Deportes</b></h2>
          	<span class="info-box-number" style="font-weight: normal;">A continuacion podra gestionar todos los deportes registrados en el sistema</span>
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
	<!-- Your Page Content Here -->
	<div class="box box-danger">
		<div class="box-header with-border">
	      	<h3 class="box-title"><b>Listado de Deportes Registrados</b></h3>
	    </div>
	    <div class="box-body">	
	    	<table id="example" class=" display table table-bordered table-striped dataTable" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Codigo</th>
		                <th>Nombre</th>
		                <th>Fecha Incorporación</th>
		                <th>Numero de Medallas</th>
		                <th style="width: 100px;">Acción</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php
			       	 if ($deport ->next()) {
			       	 
		        		foreach($deport as $d) {	
		        			
				        		print('
						        	<tr>
						               <td>'.$d['codDeporte'].'</td>
						        		<td>'.$d['nombre'].'</td>
						                <td>'.$d['fechaIncorporacion'].'</td>
						                <td>'.$d['numeroMedallas'].'</td>
					                	<td style="vertical-align: middle;text-align: center;">
						                	<button class="btn btn-sm btn-danger btn-delete-doc" id="delete-res" title="Eliminar" data-id="'.$d['codDeporte'].'">
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
					        		<td colspan="5"><p>No hay deportes registrados</p></td>
					        	</tr>
					        ');
				         }
				    ?>
		        </tbody>
		    </table>  
	    </div>
	</div>    	
</section>
<!-- /.content -->
<!-- Modal cargar archivos -->
<div class="modal fade modal-danger" id="myModalArchivos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title" id="myModalLabel">Formulario para Registro de Deportes</h4>
      	</div>
      		<form id="form-save-deporte">
      			<input type="hidden" id="type-action"/>
	      		<div class="modal-body">
	      			<div class="form-group">
	                  	<label for="titulo">Codigo del Deporte</label>
	                  	<input type="text" class="form-control" name="codDeporte" id="codDeporte" placeholder="Codigo">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Nombre del Deporte</label>
	                  	<input type="text" class="form-control" name="nombre" id="nombreDeporte" placeholder="Nombre">
	                </div>
	                 <div class="form-group">
	                  	<label for="titulo">Fecha de Incorporacion</label>
	                  	<input type="date" class="form-control" name="fechaIncorporacion" id="fechaIncorporacion" placeholder="Fecha">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Numero de Medallas</label>
	                  	<input type="text" class="form-control" name="numeroMedallas" id="numeroMedallas" placeholder="Numero de medallas">
	                </div>
	      		</div>      		      	
                <div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			    	<button type="button" id="btn-save-deporte"  class="btn btn-primary">Guardar</button>
			  	</div>
      		</form>
    </div>
  </div>
</div>
<!-- BTN floating modal -->
<button class="btn btn-danger btn-fixed" data-whatever="registrar" data-toggle="modal" data-target="#myModalArchivos"><i class="fa fa-upload"></i></button>

<?php include 'footer.php'; ?>