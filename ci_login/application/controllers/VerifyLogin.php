<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library("form_validation");
    }

    public function index()
    {
        $this->form_validation->set_rules('txt_login', 'Login', 'callback_check_login');
        $this->form_validation->set_rules('txt_pass', 'Password', 'callback_check_pass');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }else{
            $login = $this->input->post('txt_login');
            $pass = md5($this->input->post('txt_pass'));

            //test select du model user
            $result = $this->user->select($login,$pass);

            //test result, si TRUE c'est que l'utilisateur existe sinon on redirige vers le formulaire
            if($result){
                $data = array("login"=> $login, "pass"=> $pass);
                $this->session->set_userdata($data);
                redirect('admin','refresh');
            }else{
                $this->load->view('header');
                $this->load->view('login');
                $this->load->view('footer');
            }
        }
    }

    //fonction check si le login est NULL
    public function check_login($str){
        if($str != NULL){
            return TRUE;
        }else{
            $this->form_validation->set_message("check_login","Mauvais login");
            return FALSE;
        }
    }

    //fonction check si le pass est NULL
    public function check_pass($str){
        if($str != NULL){
            return TRUE;
        }else{
            $this->form_validation->set_message("check_pass","Mauvais password");
            return FALSE;
        }
    }

}