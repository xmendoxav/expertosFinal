<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){ //Definición del modelo
		parent:: __construct();
		$this->load->model('modelsP');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
	}


	public function index(){
		$this->load->view('VPrincipal.php');
	}

	public function registrarUsr(){
		$name = $this->input->post('name');
		echo "Se leyó; ".$name;
	}


	public function ingresar(){
		$nombre = $this->input->post('nombre');
		$psw = $this->input->post('psw');
		$buscaUsr = $this->modelsP->buscausr($nombre,$psw);
		var_dump($buscaUsr);

	}
}
