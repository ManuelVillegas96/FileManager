<?php

class Conexion {
	private $con;
	function getCon()
	{
		$host="localhost";
		$db="filemanagerdb";
		$user="root";
		$pass="";
		$con =new mysqli("localhost","root","", "filemanagerdb");
		if(mysqli_connect_errno()){
			$msgerror = "Error: no se puede conectar a la base de datos";
			$msgerror .= "Contacte con soporte para resolver el problema";
			echo $msgerror;
			exit(0);
		}
 		//Establecer el conjunto de caracteres a utf8
		$con->set_charset("utf8");
		return $con;
	}
}
?>