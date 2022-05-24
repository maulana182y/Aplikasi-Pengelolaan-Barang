<?php
class Menu_model extends CI_Model{

    function get_all_data(){
        $query=$this->db->query("SELECT * from user_menu")->result_array();
        return $query;
    }

    function get_all_submenu(){
    	// query join 
        $query = $this->db->query("SELECT `user_sub_menu`.*, `user_menu`.`menu`
          FROM `user_sub_menu` JOIN `user_menu`
          ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
          ");
        return $query->result();
    }

    // add by maulana 8-4-22

    function get_edit_Smenu($id){        
        $query=$this->db->query("SELECT `user_sub_menu`.*, `user_menu`.`menu`
          FROM `user_sub_menu` JOIN `user_menu`
          ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
          WHERE `user_sub_menu`.id = '$id'");
        return $query->result();
    }

    function edit_smenu($id,$title,$menu,$menu_id,$url,$icon){
        // var_dump($id,$title,$menu_id,$url,$icon);
        // exit;
        $data = array(
            'title' => $title,
            'url' => $url, 
            'menu_id' => $menu_id,
            'icon' => $icon
        );
        $this->db->where('id',$id);
        $output = $this->db->update('user_sub_menu',$data);
        return $output;
    }

    // end by maulana 8-4-22

    function activateSmenu($value){
        $data = array(
            'is_active' => $value['value']
        );
        $this->db->where('id',$value['id']);
        $output = $this->db->update('user_sub_menu',$data);
        return $output;
    }

    

}