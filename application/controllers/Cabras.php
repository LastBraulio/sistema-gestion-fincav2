<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Cabras extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
			
	}
	// Inserciones de Registros del sistema
	function insert_cabras()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/insert-cabra');
		$this->load->view('sistema/footer');
	}
	function list_cabras()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_animal');
		$this->load->view('sistema/footer');
	}
	
	

}
