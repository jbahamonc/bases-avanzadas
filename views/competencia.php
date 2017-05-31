<?php include 'header.php'; ?>

<section class="content-header no-index">
    <div class="info-box">
    	<span class="info-box-icon" style="background-color: white;"><i class="fa fa-address-book-o"></i></span>
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
		        	<tr>
		        		<td>Codigo Deporte</td>
		                <td>Nombre Deporte</td>
		                <td>Descripcion</td>
		                <td>Numero de Integrantes</td>
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
      		<form action="">
      			<div class="modal-body">
    				<div class="form-group">
	                  	<label for="titulo">Seleccione el deporte</label>
	                  	<select name="" id="" class="form-control">
	                  		<option value="">Seleccione</option>
	                  		<option value="">Deporte 1</option>
	                  		<option value="">Deporte 2</option>
	                  		<option value="">Deporte 3</option>
	                  	</select>
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Descripcion de la Competencia</label>
	                  	<input type="text" class="form-control" name="title_doc" id="titulo" placeholder="Descripcion">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Numero de Integrantes</label>
	                  	<input type="number" class="form-control" name="title_doc" id="titulo" placeholder="Integrantes">
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