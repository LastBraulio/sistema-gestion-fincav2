<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Paginas extends CI_Controller
{
	
	function _construct()
	{
		parent::_construct();
		
			
	}
	function index()
	{
		$this->load->helpers('url');
		$this->load->view('main/header');
		$this->load->view('main/cuerpo');
		$this->load->view('main/login');
		$this->load->view('main/crear-cuenta');
		$this->load->view('main/footer');
	}
	function inicio()
	{
		$this->load->helpers('url');
		$this->load->view('main/header2');
		$this->load->view('main/inicio');
		$this->load->view('main/login');
		$this->load->view('main/crear-cuenta');
		$this->load->view('main/footer2');
	}
	function sobre(){
		$this->load->view('main/header2');
		$this->load->view('main/sobre');
		$this->load->view('main/login');
		$this->load->view('main/crear-cuenta');
		$this->load->view('main/footer2');
	}
	function manual(){
		$this->load->view('main/header2');
		$this->load->view('main/manual');
		$this->load->view('main/login');
		$this->load->view('main/crear-cuenta');
		$this->load->view('main/footer2');
	}
	function redireccionar1()
	{	
		
		header('Location:  /AdministracionFinca/index.php/Control/principal');
		//$this->load->view('main/peticion');
	}
}






 ?>