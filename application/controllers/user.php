<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

define ( 'PICUP_KEY', 'picup' );
class User extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/welcome
	 * - or -
	 * http://example.com/index.php/welcome/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * 
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function dotest() {
		//$data ['user_login'] = $this->get_session ();
		//$this->load->view ( 'error/loginfail', $data );
		// redirect('/welcome','refresh');
		echo 'test';
	}
	
	public function dologin_ws(){
		$this->load->model ( 'account/user_account', 'user' );
		
		$username = $this->input->post ( 'username' );
		$password = $this->input->post ( 'password' );
		
		// check user authen
		$user = $this->user->get_user_authen ( $username, $password );
		
		if (count ( $user ) == 1) {
			// Gen sessionid
			$session_id = md5 ( $username . $password . PICUP_KEY );
				
			$user_data = array (
					'email' => $username,
					'user_id' => $user [0]->user_id,
					'display_name' => $user [0]->display_name,
					'session_id' => $session_id,
					'is_logged_in' => true
			);
			
			echo '{ "user_id": "'.$user [0]->user_id.'", "display_name": "'.$user [0]->display_name.'","session_id":"'.$session_id.'"}';		
			//$this->session->set_userdata ( $user_data );
		}else{
			//$this->session->sess_destroy ();	
			echo '{ "user_id": "", "display_name": "","session_id":""}';		
		}
		
	}
	
	public function dologin() {
		$this->load->model ( 'account/user_account', 'user' );
		
		$username = $this->input->post ( 'username' );
		$password = $this->input->post ( 'password' );
		
		// check user authen
		$user = $this->user->get_user_authen ( $username, $password );
		
		if (count ( $user ) == 1) {
			
			// Gen sessionid
			$session_id = md5 ( $username . $password . PICUP_KEY );
			
			$user_data = array (
					'email' => $username,
					'user_id' => $user [0]->user_id,
					'display_name' => $user [0]->display_name,
					'session_id' => $session_id,
					'is_logged_in' => true 
			);
			
			$this->session->set_userdata ( $user_data );
			
			redirect ( "/albums" );
		} else {
			
			$this->session->sess_destroy ();
			
			$this->load->view ( 'error/loginfail' );
		}
	}
	public function dologoff() {
		$this->session->sess_destroy ();
		
		redirect ( "/welcome" );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */