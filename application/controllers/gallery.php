<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Gallery extends CI_Controller {
	public function index() {
		$header['title'] = 'Gallery';
				
		$this->load->view ( 'template/header', $header);
		$this->load->view ( 'gallery/gallery');
		$this->load->view ( 'template/footer' );
	}
	
	public function view(){
		$gallery_name = 'Test Gallery';
		$gallery_desc = 'Description';
		
		$header['title'] = 'View Gallery';
		$data['gallery_name']  = $gallery_name;
		$data['gallery_desc']  = $gallery_desc;
		
		$this->load->view ( 'template/header', $header);
		$this->load->view ( 'gallery/view_gallery',$data);
		$this->load->view ( 'template/footer' );
				
	}
	
	public function prepare(){
		$header['title'] = 'Prepare Order';

		$this->load->view ( 'template/header', $header);
		$this->load->view ( 'transaction/prepare_order');
		$this->load->view ( 'template/footer' );
	
	}
	
}