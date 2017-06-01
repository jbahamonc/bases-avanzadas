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
				$res = Competencia::save($deporte, $descripcion, $integrantes);
				$json = $res;
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
				$res = Competencia::update($deporte, $descripcion, $integrantes);
				$json = $res;
			}
			else {
				$json = ['ok' => false, 'error' => 'Faltan datos por ingresar'];
			}
			print(json_encode($json));

		}
	}

?>