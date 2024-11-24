<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class R_general extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
			
	}
	
	function insert_registro_general()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/insert-inv-general');
		$this->load->view('sistema/footer');
	}
	function listar_registro_general()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_rgeneral');
		$this->load->view('sistema/footer');
	}
	function insert_proveedor()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/insert_provedor');
		$this->load->view('sistema/footer');
	}
	function listar_proveedor()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_proveedor');
		$this->load->view('sistema/footer');
	}
	
}
