<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 /**
 * 
 */
 class M_empleados extends CI_Model
 {
 	
 	function __construct()
 	{
 		
 	}

 	function obtener(){
 		$this->load->database();
 		$query = $this->db->get('empleados');
 		return $query->result();
 	}
 	function add(){
 		$this->load->database();
 		$insertando = $this->input->post();
 		unset($insertando['botonSubmit']);
 		$this->db->insert('empleados', $insertando);
 		return 1 ;
 	}
 }
 ?>