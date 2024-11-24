<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Produccion extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
	}
	
	function crear_producto(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/crear-producto');
		$this->load->view('sistema/footer');
	}
	function procesar_produccion(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/crear-producto'); // por quitarlos 
		$this->load->view('sistema/footer');
	}
	

}
