<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){ //Definición del modelo
		parent:: __construct();
		$this->load->model('modelsP');
		$this->load->helper('url');
		$this->load->helper('url_helper');
		$this->load->helper('form');
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
		if($sexo == 'M') {
			$sexo = 1;
		}elseif($sexo == 'F'){
			$sexo = 2;
		}
		$l_nac = $this->input->post('l_nac');
		$psw = $this->input->post('pswL');
		$insertaUsr = $this->modelsP->insertaUsr($name, $apellidos, $email, $age, $sexo, $psw, $l_nac);
	}

	public function traeComidaxHora(){
		$tComida = $this->input->post('tComida');
		//$insertaUsr = $this->modelsP->insertaUsr($tComida, 'Prueba', 'echo-4109@hotmail.com', '10', '2', '1234', 'Tolus');
		$comidaxHora = $this->modelsP->buscaPlatillos($tComida);

		echo json_encode($comidaxHora);
	}


	public function ingresar(){
		$nombre = $this->input->post('nombre');
		$psw = $this->input->post('psw');
		$buscaUsr = $this->modelsP->buscausr($nombre,$psw);
		//var_dump($buscaUsr);
		if ($buscaUsr) {
			$dataSession = array(
										'psw' => $buscaUsr['psw'],
										'id'=> $buscaUsr['id'],
	                	'nombre' => $buscaUsr['nombre']." ".$buscaUsr['apellidos'],
	                	'user_logged' => true
	            	);
			$this->session->set_userdata($dataSession);
			$this->obtenInfo();
			//2 esta referido al administrador y 1 para el vendedor
		//	if ($existe['tipoUsuario'] == 2) {
				//return $this->cargaInicio();
			//}elseif ($existe['tipoUsuario'] == 1) {
				// code...

	}else {
			$this->session->set_flashdata("error", "El Nombre de usuario o contraseña es incorrecto");
			redirect(base_url(), "refresh");
		}


	}
	public function obtenInfo(){
		//Aqui haremos todos los analisis y se los enviaremos a la vista, y luego en la vista vemos como nos peleamos jejejejejeje
		//El primer paso es verificar que tiene datos, en caso de que no tenga ningun dato guardado, enviaremos cadenas vacias a la vista que representaran que el usuario no ha ingresado ningun dato
		$datos["consumos"] = $this->modelsP->obtenInfo($this->session->userdata('id'));
		if ($datos["consumos"] == NULL){
			$datos["desayunos"] = $this->modelsP->buscaPlatillos("D");
			$datos["comidas"] = $this->modelsP->buscaPlatillos("C");
			$datos["cenas"] = $this->modelsP->buscaPlatillos("CE");
			$datos["bebidas"] = $this->modelsP->buscaPlatillos("B");
			//var_dump(count($datos));
			//die();
			//Obtenemos la hora, para saber que recomendar POR HORA
			date_default_timezone_set("America/Inuvik");
			$time = getdate();
			$h = $time['hours'];
			//Hora de atencion de 07:00 a 23:00
		    // 7 Se abre a las 7 
		    // 23 Se cierra a las 23;
		    // 11 El desayuno acaba a las 11:00
		    // 18 La comida acaba a las 18:00
		    // 23 LA cena acaba a las 23:00 (Hora del cierre)
		    if(($h>=7) && ($h<=11)){
		      //Hora del desayuno
		      echo "Hora del desayuno";
		      $datos["recomendacionHora"] = $datos['desayunos']; 
		    }else if(($h>=11)&&($h<=18)){
		      //Hora de la comida
		      echo "Hora de la comida";
		      $datos["recomendacionHora"] = $datos['comidas']; 
		    }else if(($h>=18)&&($h<=23)){
		      //Hora de la cena
		      $datos["recomendacionHora"] = $datos['cenas']; 
		    }		    
			$this->load->view('menu', $datos);
		}else {

			/*aqui tenenmos diferentes variables de entradada para el modelo, para desayuno
			basta con poner:
			DESAYUNO = "D"
			COMIDA = "C"
			CENA = "CE"
			*/
			$datos["desayunos"] = $this->modelsP->buscaPlatillos("D");
			$datos["comidas"] = $this->modelsP->buscaPlatillos("C");
			$datos["cenas"] = $this->modelsP->buscaPlatillos("CE");
			$datos["bebidas"] = $this->modelsP->buscaPlatillos("B");
		}

		//$datos["recomendaciones"] =
		//var_dump($datos);


	}
	public function agregaComida(){
		$nombreComida = $this->input->post('nombre');

	}
}
