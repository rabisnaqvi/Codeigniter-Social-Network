<?php
defined('BASEPATH') or exit();
/**
* Ajax Controller for all ajax requests
*/
class Ajax extends MEET_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
			exit('Hmmm, Cheatin Huh?. You can\'t Cheat Your Daddy. Now go to hell or watch Pogo.');
		}
	}
	public function login()
	{
			if($this->session->userdata('user_id')) {
				$this->session->unset_userdata('user_id');
			}
		$username = $this->input->post('login');
		$pass = md5($this->input->post('pass'));
		if(!$username || !$pass) {
			show_404();
		}
		if($this->Functions->check_login($username, $pass)) {
			$return = array(
				'cb_csrf_secured'=>$this->security->get_csrf_hash()
				);
			$id = $this->Functions->get_user_id_from_username($username);
			$this->session->set_userdata('user_id', $id);
		} else {
			$return = array(
				'cb_csrf_secured'=>$this->security->get_csrf_hash(),
				'error'=>'Invalid Username/Password'
				);
		}
		echo json_encode($return);
	}
}