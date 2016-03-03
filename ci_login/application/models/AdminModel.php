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

    public function selectById($id){
        $query = $this->db->get_where('users',array('id'=>$id));

        if($query->num_rows() == 1){
            return array(TRUE,$query->result_array());
        }else{
            return FALSE;
        }
    }

    public function update($id){
        $result = $this->selectById($id);

        if($result[0]){
            $array = $result[1];
            foreach($array as $value){
                if($value['admin'] == 1){
                    $admin = array("admin" => 0);
                    $this->db->where("id",$id);
                    $this->db->update("users",$admin);
                }else{
                    $admin = array("admin" => 1);
                    $this->db->where("id",$id);
                    $this->db->update("users",$admin);
                }
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete($id){
        $result = $this->selectById($id);

        if($result[0]){
            $array = $result[1];
            foreach($array as $value){
                $this->db->delete('users', array('id' => $id)); 
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }
}