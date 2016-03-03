<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminModel extends CI_Model{

    public function insert($login,$email,$pass){
        $data = array("login"=>$login,"email"=>$email,"password"=>$pass);
        $query = $this->db->insert('users',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function selectAll(){
        $query = $this->db->get('users');
        if($query->num_rows() == 0){
            return FALSE;
        }else{
            return $query->result_array();
        }
    }
}