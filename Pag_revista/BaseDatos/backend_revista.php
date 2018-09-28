<?php
	

	require_once './conexion_bd.php';



	$obsClass = new Observer();
	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){
		$obj = $_GET['search'];
		$obsClass->getUser($mysqli, $obj);
	}
	if(isset($_POST)){
		$obj = (object)$_POST;
		$obsClass->insertUser($mysqli, $obj);
	}

class Observer {

	function getUser(){

		$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

		$valores = mysql_fetch_array($queryRevista);

		if(isset($_GET['search'])){
			if(count($valores) > 0){
				echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
			}else{
				echo "No estas registrado, por favor registrate antes de realizar una suscripción";
			}
		}

	}

	function insertUser($mysqli, $obj){
		$str = "INSERT INTO usuario VALUES(".$obj->identification.",
		'".$obj->first_name."', '".$obj->last_name."', ".$obj->age.",
		".$obj->city.")";

		$values1 = $mysqli -> query($str);
	}

	function suscribeUser($mysqli, $obj){}
	};
?>