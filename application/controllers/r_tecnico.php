<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class R_tecnico extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
			
	}
	
	// Inserciones de Registros del sistema
	function NuevoRegistroT()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/tabcontrol');
		$this->load->view('sistema/footer');
	}
	function ListaRT()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_rtecnico');
		$this->load->view('sistema/footer');
	}
	
}
