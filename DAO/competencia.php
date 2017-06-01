<?php  

	/**
	* Clase DAO para la gestion de las competencias en la base de datos
	*/
	class Competencia {
		
		public static function select() {
			try {
				$conn = new MongoClient();
				$db = $conn->competicion;
				$coll1 = $db->selectCollection("competencia");
				$coll2 = $db->selectCollection("deporte");
				$com = $coll1->find();
				$dep = $coll2->find();
				return array('competencias' => $com, 'deportes' => $dep );
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		public static function save($deporte, $descripcion, $integrantes) {
			try {
				$conn = new MongoClient();
				$db = $conn->competicion;
				$coll = $db->selectCollection("competencia");
				$dep = $db->selectCollection("deporte");
				$datadep = $dep->find(array('nombre' => $deporte));
				$obj;
				foreach ($datadep as $val) {
					$obj = new stdClass();
					$obj->_id = $val['_id'];
					$obj->codDeporte = $val['codDeporte'];
					$obj->nombre = $val['nombre'];
					$obj->fechaincorporacion = $val['fechaincorporacion'];
					$obj->numeromedallas = $val['numeromedallas'];
				}
				$res = $coll->insert(array('descripcion' => $descripcion, 'numintegrantes' => $integrantes, 'deporte' => $obj));
				return ['ok' => true];
			} catch(Exception $e) {
				return ['ok' => false, 'error' => $e->getMessage()];
			}
		}

		public static function update($deporte, $descripcion, $integrantes) {
			try {
				$conn = new MongoClient();
				$db = $conn->competicion;
				$coll = $db->selectCollection("competencia");
				$dep = $db->selectCollection("deporte");
				$datadep = $dep->find(array('nombre' => $deporte));
				$obj;
				foreach ($datadep as $val) {
					$obj = new stdClass();
					$obj->_id = $val['_id'];
					$obj->codDeporte = $val['codDeporte'];
					$obj->nombre = $val['nombre'];
					$obj->fechaincorporacion = $val['fechaincorporacion'];
					$obj->numeromedallas = $val['numeromedallas'];
				}
				$coll->update(array(
					'descripcion' => $descripcion),
					array(
						'$set' => array(
										'descripcion' => $descripcion,
									    'numintegrantes' => $integrantes,
										'deporte' => $obj)));

				return ['ok' => true];
			} catch(Exception $e) {
				return ['ok' => false, 'error' => $e->getMessage()];
			}
		}
	}

?>