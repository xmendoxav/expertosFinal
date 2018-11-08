<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principalController extends CI_Controller {

	public function __construct(){ //Definición del modelo
		parent:: __construct();
		$this->load->model('modelsP');
	}

	public function index(){ //Carga la vista inicial	
		$this->load->view('vLogin');
	}
}
