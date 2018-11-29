<?php
	class modelsP extends CI_Model{
		function __construct(){
    $this->load->database();
  }

  public function insertaUsr($name, $apellidos, $email, $age, $sexo, $psw, $l_nac){ //Inserts one User into de DataBase
  //one argument is null "place of birth"
  	$query = "INSERT INTO usuario (id, psw, nombre, apellidos,luga_nacimiento,edad,sexo,email) VALUES (NULL, '".$psw."', '".$name."', '".$apellidos."', '".$l_nac."', '".$age."', '".$sexo."', '".$email."')";
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

  public function buscaPlatillos($tipo){
  	$query = "SELECT * FROM menu WHERE tipo_comida = '".$tipo."'";
  	$resultado = $this->db->query($query);
  	return $resultado->result_array();
  }
	public function buscaIdComida($nombreComida){
		$query = "SELECT id FROM menu WHERE nombre = '".$nombreComida."'";
		$resultado = $this->db->query($query);
		$resultado = $resultado ->row_array();
		$resultado = $resultado["id"];
		return $resultado;
	}
	public function ingresaCompra($idComida,$usuario,$calificacion){
		$query = "INSERT INTO consumo (id_usuario, id_menu,fecha, hora,consumo_total,valoracion) VALUES ('".$usuario."', '".$idComida."', '2018-11-06', '06:06:11', '239', '".$calificacion."')";
		$this->db->query($query);

	}
}
?>
