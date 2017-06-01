<?php  

	
	/**
	* 
	*/
	class Resultado {
		
		public static function save($deportista, $competencia, $posicion) {
			try {
				$conn = new MongoClient();
				$db = $conn->competicion;
				$coll = $db->selectCollection("competencia");
				$resultados = new stdClass();
				$resultados->codDeportista = $deportista;
				$resultados->posicion = $posicion;
				$coll->update(
					array('descripcion' => $competencia),
						array('$addToSet' => array('resultado' => array('$each' => array($resultados)))));

				return ['ok' => true];
			} catch(Exception $e) {
				return ['ok' => false, 'error' => $e->getMessage()];
			}
		}

		public static function update($deportista, $competencia, $posicion) {
			try {
				$conn = new MongoClient();
				$db = $conn->competicion;
				$coll = $db->selectCollection("competencia");
				$resultados = new stdClass();
				$resultados->codDeportista = $deportista;
				$resultados->posicion = $posicion;
				$coll->update(
					array('descripcion' => $competencia),
						array('$set' => array('descripcion' => $competencia, 'resultado' => array(array('codDeportista' => $deportista, 'posicion' => $posicion)))));

				return ['ok' => true];
			} catch(Exception $e) {
				return ['ok' => false, 'error' => $e->getMessage()];
			}
		}

		public static function delete($id) {
			try {
				$conn = new MongoClient();
				$db = $conn->competicion;
				$coll = $db->selectCollection('competencia');
				$coll->remove(array('$pullAll' => array('codDeportista','posicion')));
				return ['ok' => true];
			}catch(Exception $e) {
				return ['ok' => false, 'error' => $e->getMessage()];
			}
		}
	}

?>