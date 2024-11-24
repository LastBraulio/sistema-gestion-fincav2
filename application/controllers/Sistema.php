<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Sistema extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
		
			
	}
	function index()
	{
		$this->load->helpers('url');
		$this->load->view('sistema2.0/html_header/html_header');
		$this->load->view('sistema2.0/LayoutV/layout_v');
		$this->load->view('sistema2.0/LayoutH/layout_h');
		$this->load->view('sistema2.0/Content/content_dashboard');
		$this->load->view('sistema2.0/Footer_/footer_');
	}
	function principal()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/Consultas/panel1.php');
		$this->load->view('sistema/contenido2');
		$this->load->view('sistema/footer');
	}
	// Cerrar seccion
	function cerrar(){
		$this->load->helpers('url');
		redirect('http://localhost/AdministracionFinca/index.php/Paginas/inicio');
	}
	function Busquedan1()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/Consultas/consulta1'); // aqui supuestamente hare una prueba de busqueda en ajax 
		$this->load->view('sistema/footer');
	}
	function kardex1()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/Consultas/consulta2'); // aqui supuestamente hare una prueba de busqueda en ajax 
		$this->load->view('sistema/footer');
	}
	function act_kardex1()
	{
		$this->load->helpers('url');
		$this->load->view('sistema/header');
		$this->load->view('sistema/menu_estado');
		$this->load->view('sistema/megamenu');
		$this->load->view('sistema/Actualizar/ActualizarCardex'); // aqui supuestamente hare una prueba de busqueda en ajax 
		$this->load->view('sistema/footer');
	}
	

	
	

}






 ?>