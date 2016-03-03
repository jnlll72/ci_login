<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library("form_validation");
    }

    public function index(){
        $this->form_validation->set_rules('txt_login', 'Login', 'callback_check_login');
        $this->form_validation->set_rules('txt_pass', 'Password', 'callback_check_pass');
        $this->form_validation->set_rules('txt_confirm_pass', 'Password', 'matches[txt_pass]|callback_check_pass');
        $this->form_validation->set_rules('txt_email','Email','valid_email|callback_check_email');

        if($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('signupView');
            $this->load->view('footer');
        }else{
            $login = $this->input->post('txt_login');
            $email = $this->input->post('txt_email');
            $pass = md5($this->input->post('txt_pass'));

            $result = $this->adModel->insert($login,$email,$pass);

            if($result){
                $this->load->view('header');
                $this->load->view('login');
                $this->load->view('footer');
            }else{
                $this->load->view('header');
                $this->load->view('signupView');
                $this->load->view('footer');
            }
        }
    }

    public function check_login($login){
        if(empty($login)){
            $this->form_validation->set_message("check_login","<span class='glyphicon glyphicon-exclamation-sign'></span>&nbsp;&nbsp;&nbsp;Veuillez saisir un login");
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function check_pass($pass){
        if(empty($pass)){
            $this->form_validation->set_message("check_pass","<span class='glyphicon glyphicon-exclamation-sign'></span>&nbsp;&nbsp;&nbsp;Veuillez saisir un mot de passe");
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function check_email($email){
        if(empty($email)){
            $this->form_validation->set_message("check_email","<span class='glyphicon glyphicon-exclamation-sign'></span>&nbsp;&nbsp;&nbsp;Veuillez saisir un email");
            return FALSE;
        }else{
            return TRUE;
        }
    }
}