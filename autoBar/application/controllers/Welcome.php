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
		$apellidos = $this->input->post('apellidos');
		$email = $this->input->post('email');
		$age = $this->input->post('age');
		$sexo = $this->input->post('sexo');
		$psw = $this->input->post('psw');

		$insertarUsr = $this->modelsP->insertaUsr($name, $apellidos, $email, $age, $sexo, $psw);

		
	}


	public function ingresar(){
		$nombre = $this->input->post('nombre');
		$psw = $this->input->post('psw');
		$buscaUsr = $this->modelsP->buscausr($nombre,$psw);
		//var_dump($buscaUsr);
		if ($buscaUsr) {
			$dataSession = array(
	                	'tipo' => $existe['tipo'],
										'tipoId' => $existe['tipoUsuario'],
										'id'=> $existe['idusr'],
	                	'nombre' => $existe['nombre']." ".$existe['apellidoP']." ".$existe['apellidoM'],
	                	'user_logged' => true
	            	);
			$this->session->set_userdata($dataSession);

			//2 esta referido al administrador y 1 para el vendedor
			if ($existe['tipoUsuario'] == 2) {
				return $this->cargaInicio();
			}elseif ($existe['tipoUsuario'] == 1) {
				// code...
			}

		}else {
			$this->session->set_flashdata("error", "El Nombre de usuario o contraseña es incorrecto");
			$this->load->view('login');
		}


	}
}
