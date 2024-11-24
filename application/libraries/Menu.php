<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	 class Menu 
	{
		private $arr_menu;

		public function __construct()
		{
			
		} 
		public function obtener_array($data)
		{
			$this->arr_menu = $data;
		}
		public function devuelve_array(){
			
			$ret_menu = arr_menu;
			return $ret_menu;
		}
	}
	
 ?>