<?php
defined('BASEPATH') or exit();
class Login extends MEET_Controller
{
    public function index()
    {
        if ($this->session->userdata('user_id')) {

            return redirect('newsfeed', 'refresh');

        }
        if ($this->session->userdata('user_id')) {
            return redirect('newsfeed', 'refresh');
        }
        $this->load->view('login', array('title' => 'Login to Meet', 'page_class' => 'login'));
    }
    public function logout() {
        $this->session->unset_userdata('user_id');

        return redirect('','refresh');
    }
}
