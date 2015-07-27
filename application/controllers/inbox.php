<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Inbox extends CI_Controller {
	public function index() {
		$header['title'] = 'Inbox';
				
		$this->load->view ( 'template/header', $header);
		$this->load->view ( 'inbox/inbox');
		$this->load->view ( 'template/footer' );
	}
	
	public function view() {
		$header['title'] = 'Inbox Detail';
	
		$this->load->view ( 'template/header', $header);
		$this->load->view ( 'inbox/view_inbox');
		$this->load->view ( 'template/footer' );
	}
	
}