<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('VPrincipal.php');
	}

	public function registrarUsr(){
		$name = $this->input->post('name');
		echo "Se leyó; ".$name;
	}


}
