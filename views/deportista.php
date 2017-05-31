<?php include 'header.php'; ?>

<section class="content-header no-index">
    <div class="info-box">
    	<span class="info-box-icon" style="background-color: white;"><i class="fa fa-address-book-o"></i></span>
    	<div class="info-box-content">
          	<h2 class="info-box-text"><b>Panel de Gestion de Deportistas</b></h2>
          	<span class="info-box-number" style="font-weight: normal;">A continuacion podra gestionar todos los deportistas registrados en el sistema</span>
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
	<!-- Your Page Content Here -->
	<div class="box box-danger">
		<div class="box-header with-border">
	      	<h3 class="box-title"><b>Formulario de Gestion de Deportistas</b></h3>
	    </div>
	    <div class="box-body">	
	    	<table id="example" class=" display table table-bordered table-striped dataTable" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Documento</th>
		                <th>Nombre</th>
		                <th>Fecha Nac.</th>
		                <th>Altura</th>
		                <th>Peso</th>
		                <th>Deporte</th>
		                <th style="width: 100px;">Acción</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<tr>
		        		<td>Documento</td>
		                <td>Nombre</td>
		                <td>Fecha Nac.</td>
		                <td>Altura</td>
		                <td>Peso</td>
		                <td>Deporte</td>
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
        	<h4 class="modal-title" id="myModalLabel">Formulario  de Registro de Deportistas</h4>
      	</div>
      		<form action="">
	      		<div class="modal-body">
	      			<div class="form-group">
	                  	<label for="titulo">Documento de identidad</label>
	                  	<input type="text" class="form-control" name="title_doc" id="titulo" placeholder="Documento">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Nombre del Deportista</label>
	                  	<input type="text" class="form-control" name="title_doc" id="titulo" placeholder="Nombre">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Fecha de Nacimiento</label>
	                  	<input type="date" class="form-control" name="title_doc" id="titulo" placeholder="Nombre">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Altura</label>
	                  	<input type="text" class="form-control" name="title_doc" id="titulo" placeholder="Nombre">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Peso</label>
	                  	<input type="number" class="form-control" name="title_doc" id="titulo" placeholder="Peso">
	                </div>
	                <div class="form-group">
	                  	<label for="titulo">Deporte</label>
	                  	<select name="" id="" class="form-control">
	                  		<option value="">Seleccione</option>
	                  		<option value="">deporte 1</option>
	                  		<option value="">deporte 2</option>
	                  		<option value="">deporte 3</option>
	                  	</select>
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