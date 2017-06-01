<?php  

	/**
	* Clase DAO para la gestion de los deportes en la base de datos
	*/
	class Deporte {
		
		public static function select() {
			try {
				$mongo = new MongoClient();
				$db = $mongo->competicion;
				$c_deportes = $db->selectCollection("deporte");
				$dep=$c_deportes->find();
				return  $dep ;

			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		public static function save($codDeporte, $nombre, $fechaIncorporacion, $numeroMedallas) {
			try {
				$mongo = new MongoClient();
				$db = $mongo->competicion;
				$c_deportes = $db->selectCollection("deporte");//tabla deporte

				//////////////////////////////////////
				$codDeporte = $_POST["codDeporte"];
				$nombre = $_POST["nombre"];
				$fechaIncorporacion = $_POST["fechaIncorporacion"];
				$numeroMedallas = $_POST["numeroMedallas"];
				//////////////////////////////////////

				$nuevoDeporte = array("codDeporte"=>$codDeporte,"nombre"=>$nombre,"fechaIncorporacion"=>$fechaIncorporacion,"numeroMedallas"=>$numeroMedallas);
				$resultado=$c_deportes->insert($nuevoDeporte);
				return["ok"=>true];
				
			} catch(Exception $e) {
				return ['ok' => false, 'error' => $e->getMessage()];
			}
		}

		public static function update($codDeporte, $nombre, $fechaIncorporacion, $numeroMedallas) {
			try {

				$mongo = new MongoClient();
				$db = $mongo->competicion;
				$c_deportes = $db->selectCollection("deporte");//tabla deporte


				// //////////////////////////////////////
				// $codDeporte = $_POST["codDeporte"];
				// $nombre = $_POST["nombre"];
				// $fechaIncorporacion = $_POST["fechaIncorporacion"];
				// $numeroMedallas = $_POST["numeroMedallas"];
				// //////////////////////////////////////
				$c_deportes->update(array(
					'codDeporte' => $codDeporte),
					array(
						'$set' => array(
										'codDeporte' => $codDeporte,
									    'nombre' => $nombre,
										'fechaIncorporacion' => $fechaIncorporacion,
										'numeroMedallas' => $numeroMedallas)));

				return ['ok' => true];

			} catch(Exception $e) {
				return ['ok' => false, 'error' => $e->getMessage()];
			}
		}
	
	public static function delete($id) {
				try {
					$mongo = new MongoClient();
					$db = $mongo->competicion;
					$c_deportes = $db->selectCollection("deporte");

					$c_deportes->remove(array('codDeporte' => $id));										

					return ['ok' => true];
				} catch(Exception $e) {
					return $e->getMessage();
				}
	}
}
?>