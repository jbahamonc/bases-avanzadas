<?php  
	
	include 'DAO/deporte.php';
	
	/**
	* Clase controladora para gestion de deportes
	*/
	class DeporteController {
		
		function index() {
			$deport = Deporte::select();
			include 'views/deportes.php';
		}

		function registrar() {
			$codDeporte = $_POST['codDeporte'];
			$nombre = $_POST["nombre"];
			$fechaIncorporacion = $_POST["fechaIncorporacion"];
			$numeroMedallas = $_POST["numeroMedallas"];
			$json;
			if (!empty($codDeporte) and !empty($nombre) and !empty($fechaIncorporacion)and !empty($numeroMedallas)) {
				$res = Deporte::save($codDeporte, $nombre, $fechaIncorporacion, $numeroMedallas);
				$json = $res;
			}
			else {
				$json = ['ok' => false, 'error' => 'Faltan datos por ingresar'];
			}
			print(json_encode($json));

		}

		function actualizar() {
			$codDeporte = $_POST["codDeporte"];
			$nombre = $_POST["nombre"];
			$fechaIncorporacion = $_POST["fechaIncorporacion"];
			$numeroMedallas = $_POST["numeroMedallas"];
			$json;
			if (!empty($codDeporte) and !empty($nombre) and !empty($fechaIncorporacion)and !empty($numeroMedallas)) {
				$res = Deporte::update($codDeporte, $nombre, $fechaIncorporacion, $numeroMedallas);
				$json = $res;
			}
			else {
				$json = ['ok' => false, 'error' => 'Faltan datos por ingresar'];
			}
			print(json_encode($json));

		}
		function delete(){
			$codDeporte = $_GET["codDeporte"];
			if (!empty($codDeporte)) {
				$res = Deporte::delete($codDeporte);
				$json = $res;
			}
			else {
				$json = ['ok' => false, 'error' => 'Faltan datos por ingresar'];
			}
			print(json_encode($json));
		}

	}

?>