<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model{

    //fonction de test select, !! plus qu'à faire avec la base de données
    public function select($login,$pass){
        $query = $this->db->get_where('users',array('login'=>$login,'password'=>$pass));
        if($query->num_rows() == 1){
            return array(TRUE,$query->result_array());
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
