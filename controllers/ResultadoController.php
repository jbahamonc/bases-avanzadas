<?php  

	include 'DAO/competencia.php';
	include 'DAO/deportista.php';
	include 'DAO/resultado.php';
	
	/**
	* Clase controladora para los resultados de la competencia
	*/
	class ResultadoController {
		
		function index() {
			$comp = Competencia::select();
			include 'views/resultados.php';
		}

		function registrar() {
			$deportista = $_POST['deportista-res'];
			$competencia = $_POST['competencia-res'];
			$posicion = $_POST['posicion-res'];
			$json;
			if (!empty($deportista) and !empty($competencia) and !empty($posicion)) {
				$json = Resultado::save($deportista, $competencia, $posicion);
			}
			else {
				$json = ['ok' => false, 'error' => 'Faltan datos por ingresar'];
			}
			print(json_encode($json));
		}

		function actualizar() {
			$deportista = $_POST['deportista-res'];
			$competencia = $_POST['competencia-res'];
			$posicion = $_POST['posicion-res'];
			$json;
			if (!empty($deportista) and !empty($competencia) and !empty($posicion)) {
				$json = Resultado::update($deportista, $competencia, $posicion);
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
				$json = Resultado::delete($id);
			}
			else {
				$json = ['ok' => false, 'error' => 'No hay un identificador'];
			}
			print(json_encode($json));
		}
	}

?>