<?php
defined('BASEPATH') or exit();
class Newsfeed extends MEET_Controller {
	public function index() {
		$this->load->view('newsfeed', array('title'=>'Newsfeed', 'page_class'=>'newfeed'));
	}
}