<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Compras extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
			
	}
	
	function nueva_compra(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/insert_compra');
		$this->load->view('sistema/footer');
	}
	function listar_nueva_compra(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_compra');
		$this->load->view('sistema/footer');
	}
	function nueva_orden_compra(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/insert_ordenc_compra');
		$this->load->view('sistema/footer');
	}
	function listar_nueva_orden_compra(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_oc');
		$this->load->view('sistema/footer');
	}
}
