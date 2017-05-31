<?php include 'header.php'; ?>

<section class="content-header no-index">
    <div class="info-box">
    	<span class="info-box-icon" style="background-color: white;"><i class="fa fa-address-book-o"></i></span>
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
		                <th>Nombre Deportista</th>
		                <th>Posicion del Deportista</th>
		                <th>Codigo Competencia</th>
		                <th>Nombre de Competencia</th>
		                <th style="width: 100px;">Acción</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<tr>
		        		<td>Codigo Deportista</td>
		                <td>Nombre Deportista</td>
		                <td>Posicion del Deportista</td>
		                <td>Codigo Competencia</td>
		                <td>Nombre de Competencia</td>
	                	<td style="vertical-align: middle;text-align: center;">
		                	<button class="btn btn-sm btn-danger btn-delete-doc" title="Eliminar">
		                		<i class="fa fa-trash"></i>
		                	</button>
		                	<button data-toggle="modal" data-target="#myModalArchivos" class="btn btn-sm btn-danger btn-delete-doc" title="Actualizar">
		                		<i class="fa fa-refresh"></i>
		                	</button>
		                </td>
		        	</tr>
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
        	<h4 class="modal-title" id="myModalLabel">Formulario para Registro de Resultados</h4>
      	</div>
      		<form action="">
      			<div class="modal-body">
					<div class="form-group">
	                  	<label for="titulo">Deportista</label>
	                  	<select name="" id="" class="form-control">
	                  		<option value="">Seleccione</option>
	                  		<option value="">Codigo 1</option>
	                  		<option value="">Codigo 2</option>
	                  		<option value="">Codigo 3</option>
	                  	</select>
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Competencia</label>
	                  	<select name="" id="" class="form-control">
	                  		<option value="">Selecciones</option>
	                  		<option value="">Competencia 1</option>
	                  		<option value="">Competencia 2</option>
	                  		<option value="">Competencia 3</option>
	                  	</select>
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Posicion del deportista</label>
	                  	<input type="number" class="form-control" name="title_doc" id="titulo" placeholder="Posicion">
	                </div>
	            </div>
	            <div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			    	<button type="button" class="btn btn-primary">Guardar</button>
			  	</div>
			</form>
    	</div>
  	</div>
</div>
<!-- BTN floating modal -->
<button class="btn btn-danger btn-fixed" data-toggle="modal" data-target="#myModalArchivos"><i class="fa fa-upload"></i></button>

<?php include 'footer.php'; ?>