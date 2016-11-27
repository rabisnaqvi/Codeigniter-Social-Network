<?php
defined('BASEPATH') or exit();
class Register extends MEET_Controller
{
    public function index()
    {
        $this->load->view('register', array('title' => 'Register on Meet', 'page_class' => 'signup'));
    }
    public function do_it()
    {
        $fn = $this->input->post('fname');

        $ln = $this->input->post('lname');

        $email = $this->input->post('email');

        $username = $this->input->post('uname');

        $pass = $this->input->post('pass');

        if (!$fn || !$ln || !$email || !$username || !$pass) {

            show_404();

        }

        $dn = $fn . ' ' . $ln;

        $token = bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));

        if ($this->Functions->register($fn, $ln, $dn, $email, $username, md5($pass), $token)) {

            $this->session->set_flashdata('registered', 'Account successfully created. Check you email to activate account. Thanks.');

            $this->load->library('email');

            $this->email->from('no-reply@meet.com', 'Meet');

            $this->email->to($email);

            $this->email->set_mailtype("html");

            $this->email->subject('Activate Account');

            $content = "<h3>Thanks for registering on Meet.</h3><br><h4>Activate your account to rock.</h4><br><a href='" . base_url("register/activate/{$username}/{$token}") . "'>Activate my account now.</a>";

            $this->email->message($content);

            $this->email->send();

            return redirect('');

        } else {

            echo "Something Went Wrong";

        }
    }
    public function activate()
    {
        $user = $this->uri->segment(3);

        $token = $this->uri->segment(4);

        if (!$user || !$token) {

            show_404();

        }

        if ($this->Functions->check_token($user, $token)) {

            $this->Functions->activate_user($user);

            $id = $this->Functions->get_user_id_from_username($user);

            $this->session->set_userdata('user_id', $id);

            return redirect('', 'refresh');

        } else {

            echo "Hmmm, Cheatin Huh????";

        }
    }
}
