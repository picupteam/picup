<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Main extends CI_Controller {
	
	//$user_login;
	
	function __construct()
	{
		parent::__construct();
		
		$this->check_login();
				
	}
	
	function check_login(){
		
		$is_login = $this->session->userdata('is_logged_in');
		
		if ($is_login <> true){
			redirect('/welcome','refresh'); 
		}
		
		return true;				
	}
		
}

