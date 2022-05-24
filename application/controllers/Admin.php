<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {

	public function __construct(){
         parent::__construct();
         // fungsi untuk mencegah user masuk tanpa login dan berdasarkan role menggunakan file helper
         is_logg_in();
         $this->load->model('Admin_model');
     }
    
    public function index() {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['stokbarangmasuk'] = $this->Admin_model->get_stok();
        $data['stokbarangkeluar'] = $this->Admin_model->get_stokkeluar();
        $data['jumlahmasuk'] = $this->Admin_model->jumlah_barangmasuk();
        $data['jumlahkeluar'] = $this->Admin_model->jumlah_barangkeluar();
        $data['datauser'] = $this->Admin_model->all_user();
        // var_dump($data);
        $this->load->view('Admin/index',$data);
    }

    // add by maulana 2-4-22

    public function role() {
    	$data['title'] = 'Role';
    	$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    	$data['role'] = $this->Admin_model->get_role_data();
        $this->load->view('Admin/v_role',$data);
    }

    public function roleaccess($role_id) {
    	$data['title'] = 'Role Access';
    	$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    	$data['role'] = $this->Admin_model->get_role_access($role_id);

    	// penegcualian admin 
    	$this->db->where('id !=', 1);

    	// query langsung
    	// $data['menu'] = $this->db->get('user_menu')->result_array();

    	$data['menu'] = $this->Admin_model->get_menu_data();
        $this->load->view('Admin/v_role_access',$data);
    }

    public function changeaccess() {
    	$menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    // end by maulana 2-4-22
     
     // add by maulana 5-4-22
    public function user() {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Admin_model->get_all_user();
        $this->load->view('Admin/v_all_user',$data);

    }

    public function activateUsers(){
        $result= $this->Admin_model->activateUser($this->input->post());
        redirect('admin/user');
    }

    // public function edit_user($id ) {
    //     $data['title'] = 'Edit user';
    //     $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        

    //     if ($this->input->post('submit')) {
    //         $id       = $this->input->post('id');
    //         $username = $this->input->post('username');
    //         $nama = $this->input->post('nama');
    //         $email     = $this->input->post('email');
    //         // $koneksi  = $this->input->post('koneksi');
    //         // $password  = $this->input->post('password');
    //         $data = $this->Admin_model->edit_user($id);  
    //         var_dump($data);
    //         die;      
    //         // redirect('admin/user');
    //     }else{
    //         $data['_data'] = $this->Admin_model->get_edit_user($id);
    //         $this->load->view('Admin/v_edit_user',$data);
    //     }
    // }

    public function edit_user($id){
        $data['title'] = 'Edit user';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        
        if ($this->input->post('submit')) {
            $id       = $this->input->post('id');
            $username = $this->input->post('username');
            $nama     = $this->input->post('nama');
            $email  = $this->input->post('email');
            $data = $this->Admin_model->edit_user($id,$username,$nama,$email);   
            // var_dump($data);     
            redirect('Admin/user');
            return true;
        }

            
            
            $data['data'] = $this->Admin_model->get_edit_user($id);  
            // var_dump($data);
            $this->load->view('Admin/v_edit_user',$data);
        
    }
        

    // end by maulana 5-4-22
     

 }
