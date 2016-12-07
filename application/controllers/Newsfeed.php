<?php
defined('BASEPATH') or exit();
class Newsfeed extends MEET_Controller
{
    public function index()
    {
        if (!$this->session->userdata('user_id')) {

            return redirect('login', 'refresh');

        }
        $this->load->view('newsfeed', array('title' => 'Newsfeed', 'page_class' => 'newfeed'));
    }
}
