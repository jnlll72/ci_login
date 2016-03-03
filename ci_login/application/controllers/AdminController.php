<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }
    
	public function index(){
        $this->load->view('header');
		$this->load->view('userView');
        $this->load->view('footer');
	}
    
    public function adminView(){
        $result = $this->adModel->selectAll();
        $data['allUsers'] = $result;
        
        $this->load->view('header');
		$this->load->view('userView');
        $this->load->view('adminView',$data);
        $this->load->view('footer');
    }
    
    public function LogOut(){
        $this->session->unset_userdata("login");
        $this->session->unset_userdata("pass");
        $this->session->sess_destroy();
        $array = array("login"=>"","pass"=>"");
        $this->session->set_userdata($array);
        redirect('form','refresh');
    }
}