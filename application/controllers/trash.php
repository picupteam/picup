<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Trash extends CI_Controller {
	public function index() {
		$header['title'] = 'Trash';
				
		$this->load->view ( 'template/header', $header);
		$this->load->view ( 'trash/trash');
		$this->load->view ( 'template/footer' );
	}
	
	
}