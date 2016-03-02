<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }
    
	public function index()
	{
        $this->loadPage('login');
	}
    
    public function loadPage($page){
        $this->load->view('header');
		$this->load->view($page);
        $this->load->view('footer');
    }
}