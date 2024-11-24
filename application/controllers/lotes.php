<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Lotes extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
			
	}
	
	function lote_x_cabra(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/insert_lote');
		$this->load->view('sistema/footer');
	}
	function listar_lotes(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_lote');
		$this->load->view('sistema/footer');
	}
	

}
