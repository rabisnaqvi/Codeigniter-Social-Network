<?php
defined('BASEPATH') or exit();
class Login extends MEET_Controller {
    public function index() {
        $this->load->view('login', array('title'=>'Login to Meet', 'page_class'=>'login'));
    }
}