<?php include 'header.php'; ?>

<section class="content-header no-index">
    <div class="info-box">
    	<span class="info-box-icon" style="background-color: white;"><i class="fa fa-address-book-o"></i></span>
    	<div class="info-box-content">
          	<h2 class="info-box-text"><b>Panel de Resultados de la Competencia</b></h2>
          	<span class="info-box-number" style="font-weight: normal;">A continuacion podra gestionar las competencias realizadas</span>
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
	<!-- Your Page Content Here -->
	<div class="box box-danger">
		<div class="box-header with-border text-center">
	      	<h3 class="box-title" style="font-size: 1.5em;"><b>Formulario de Gestion de Resultados de las Competencias</b></h3>
	    </div>
	    <div class="box-body">	
	    	<div class="row">
	    		<div class="col-md-6">
	    			<h4><b>Datos de la Competencia</b></h4>
	    			<form action="">
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
		                <div class="box-footer text-center">
					    	<button class="btn btn-danger">Registrar Competencia</button>
					    </div>
	    			</form>
	    		</div>
	    		<div class="col-md-6">
	    			<h4><b>Resultados de la Competencia</b></h4>
	    			<form action="">
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
		                <div class="box-footer text-center">
					    	<button class="btn btn-danger">Registrar Resultados</button>
					    </div>
	    			</form>
	    		</div>
	    	</div>
	    </div
	</div>    	
</section>
<!-- /.content -->
<?php include 'footer.php'; ?>