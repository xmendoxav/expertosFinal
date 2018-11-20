<?php
	class modelsP extends CI_Model{
		function __construct(){
    $this->load->database();
  }

  public function insertaUsr($name, $apellidos, $email, $age, $sexo, $psw){ //Inserts one User into de DataBase
  	$query = "INSERT INTO usuario "
  }
	public function buscausr($nombre, $psw){
		$query = "Select * from usuarios where nombre = '".$nombre."' and psw = '".$psw."';";
		$resultado = $this->db->query($query);
		return $resultado->row_array();
	}
	}
?>
