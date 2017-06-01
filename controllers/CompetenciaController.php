<?php  
	
	include 'DAO/competencia.php';
	
	/**
	* Clase controladora para gestion de competencias
	*/
	class CompetenciaController {
		
		function index() {
			$com = Competencia::select();
			include 'views/competencia.php';
		}

		function registrar() {
			$deporte = $_POST['deporte'];
			$descripcion = $_POST['descripcion'];
			$integrantes = $_POST['integrantes'];
			$json;
			if (!empty($deporte) and !empty($descripcion) and !empty($integrantes)) {
				$json = Competencia::save($deporte, $descripcion, $integrantes);
			}
			else {
				$json = ['ok' => false, 'error' => 'Faltan datos por ingresar'];
			}
			print(json_encode($json));

		}

		function actualizar() {
			$deporte = $_POST['deporte'];
			$descripcion = $_POST['descripcion'];
			$integrantes = $_POST['integrantes'];
			$json;
			if (!empty($deporte) and !empty($descripcion) and !empty($integrantes)) {
				$json = Competencia::update($deporte, $descripcion, $integrantes);
			}
			else {
				$json = ['ok' => false, 'error' => 'Faltan datos por ingresar'];
			}
			print(json_encode($json));

		}

		function eliminar() {
			$id = $_GET['id'];
			$json;
			if (!empty($id)) {
				$json = Competencia::delete($id);
			}
			else {
				$json = ['ok' => false, 'error' => 'No hay un identificador'];
			}
			print(json_encode($json));
		}
	}

?>