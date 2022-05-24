<?php
class User_model extends CI_Model{

   function registrasiUser($data){
		$this->db->insert('users',$data);
	}

    

}