<?php
	class modelsP extends CI_Model{
		function __construct(){
    $this->load->database();
  }

  public function insertaUsr($name, $apellidos, $email, $age, $sexo, $psw,$nacimiento){ //Inserts one User into de DataBase

		//one argument is null "place of birth"
  	$query = "INSERT INTO usuario (id, psw, nombre, apellidos,luga_nacimiento,edad,sexo,email) VALUES (NULL, '".$psw."', '".$name."', '".$apellidos."', '".$nacimiento."', '".$age."', '".$sexo."', '".$email."')";
		return $this->db->query($query);
  }
	public function buscausr($nombre, $psw){
		$query = "Select * from usuario where nombre = '".$nombre."' and psw = '".$psw."';";
		$resultado = $this->db->query($query);
		return $resultado->row_array();
	}
	public function obtenInfo($nombre){
		$query = "Select * from consumo where id_usuario = '".$nombre."'";
		$resultado = $this->db->query($query);
		return $resultado->result_array();
	}
	}
?>
