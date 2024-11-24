<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Codigofacilito extends CI_Controller {
		
		function _construct(){
			parent::_construct();
			
		}	

		function index(){
			$this->load->view("codigofacilito/headers");
			$this->load->view("codigofacilito/menu");
			$this->load->view("codigofacilito/bienvenido");
			$this->load->view("codigofacilito/footer");
		}
		function contactos(){
			$this->load->view("codigofacilito/headers");
			$this->load->view("codigofacilito/menu");
			$this->load->model('M_empleados');
			$data['lista'] = $this->M_empleados->obtener();

			$this->load->view("codigofacilito/contactos",$data);
			$this->load->view("codigofacilito/footer");
		}
		function nuevo(){
			$this->load->view("codigofacilito/headers");
			$this->load->view("codigofacilito/menu");
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			if ($this->input->post()) {
				$this->form_validation->set_rules('nombre',' Campo Nombre ','required');
				$this->form_validation->set_rules('sueldo',' Campo sueldo ','required');
				if ($this->form_validation->run() == TRUE)
				{
					$this->load->model('M_empleados','', TRUE);
					
					 if ($this->M_empleados->add() <> 1) {
					 	echo 'Error No se inserto ';
					 	$this->load->view("codigofacilito/formulario");
					 }
					 else
					 {
					 	echo 'Insercion Exitosa';	
					 }

				}else{
					$this->load->view("codigofacilito/formulario");
				}
				//$this->load->view("codigofacilito/formulario");
			}
			else
			{
				$this->load->view("codigofacilito/formulario");
			}
			$this->load->view("codigofacilito/footer");
		}
		function datos()
		{
			$this->load->view("codigofacilito/headers");
			$this->load->view("codigofacilito/bienvenido");
			$this->load->view("codigofacilito/menu");
			$this->load->view("codigofacilito/recibirdatos");
			$this->load->view("codigofacilito/footer");
		}

	}

 ?>