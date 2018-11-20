<?php
	class modelsP extends CI_Model{
		function __construct(){
    $this->load->database();
  }
	public function buscausr($nombre, $psw){
		$query = "Select * from usuario where nombre = '".$nombre."' and psw = '".$psw."';";
		$resultado = $this->db->query($query);
		return $resultado->row_array();
	}
	}
?>
