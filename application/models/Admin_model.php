<?php
class Admin_model extends CI_Model{

    function get_role_data(){
        $query=$this->db->query("SELECT * from user_role")->result_array();
        return $query;
    }

    function get_stok()
    {
        $query=$this->db->query("SELECT SUM(jumlah) as jumlah FROM tb_barang_masuk");
        return $query->result();
    }

    function get_stokkeluar()
    {
        $query=$this->db->query("SELECT SUM(jumlah) as jumlah FROM tb_barang_keluar");
        return $query->result();
    }

    function all_user()
    {
        $query=$this->db->query("SELECT COUNT(*) as jumlah FROM users");
        return $query->result();
    }

    function get_role_access($role_id) {
        $query=$this->db->query("SELECT * from user_role where id='$role_id'")->row_array();
        return $query;
    }

    function get_menu_data() {
        $query=$this->db->query("SELECT * FROM user_menu WHERE id != 1")->result_array();
        return $query;
    }

    function get_all_user(){        
        $query=$this->db->query("SELECT users.id, users.nama,users.email, user_role.role, users.alamat, users.active 
            FROM users
            INNER JOIN user_role ON users.role=user_role.id");
        return $query->result();
    }

    function activateUser($value){
        $data = array(
            'active' => $value['value']
        );
        $this->db->where('id',$value['id']);
        $output = $this->db->update('users',$data);
        return $output;
    }
    function get_edit_user($id){        
        $query=$this->db->query("SELECT * from users where id='$id'");
        return $query->result();
    }

    function edit_user($id,$username,$nama,$email){
        // var_dump($id,$username,$nama,$email);
        // exit;
        $data = array(
            'username' => $username,
            'nama' => $nama, 
            'email' => $email
        );
        $this->db->where('id',$id);
        $output = $this->db->update('users',$data);
        return $output;
    }

    function jumlah_barangmasuk(){
        $query=$this->db->query("SELECT tanggal ,SUM(jumlah) as jumlah FROM tb_barang_masuk GROUP BY tanggal");
        return $query->result();
    }

    function jumlah_barangkeluar(){
        $query=$this->db->query("SELECT tanggal_keluar ,SUM(jumlah) as jumlah_keluar FROM tb_barang_keluar GROUP BY tanggal_keluar");
        return $query->result();
    }

    

}