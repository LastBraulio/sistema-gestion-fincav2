<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Ventas extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
			
	}
	function crear_venta(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/nueva-venta');
		$this->load->view('sistema/footer');
	}
	function listar_venta(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_ventas');
		$this->load->view('sistema/footer');
	}
	function crear_costo(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/nueva-venta');
		$this->load->view('sistema/footer');
	}
	function crear_cotizacion(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/nueva-venta');
		$this->load->view('sistema/footer');
	}
	function listar_cotizacion(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_cotizacion');
		$this->load->view('sistema/footer');
	}
	function crear_cliente(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/nueva-venta');
		$this->load->view('sistema/footer');
	}
	function listar_cliente(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_cliente');
		$this->load->view('sistema/footer');
	}
	function crear_nota_credito(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/nueva-venta');
		$this->load->view('sistema/footer');
	}
	function listar_nota_credito(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_nc');
		$this->load->view('sistema/footer');
	}
	function crear_factura(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/insert/nueva-venta');
		$this->load->view('sistema/footer');
	}
	function listar_factura(){
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/lista/list_factura');
		$this->load->view('sistema/footer');
	}
}
