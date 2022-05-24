<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Menu extends CI_Controller {
	public function __construct(){
         parent::__construct();
         // fungsi untuk mencegah user masuk tanpa login dan berdasarkan role menggunakan file helper
         is_logg_in();
         $this->load->model('Menu_model');
         $this->load->helper('url');
     }

	public function index(){
		 $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        $data['menu'] = $this->Menu_model->get_all_data();
        if($this->form_validation->run() == false) {
        	$this->load->view('Menu/index',$data);
        } else {
        	$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
        	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');   
            redirect('Menu');
        }
        
	}

	public function submenu() {
		$data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['subMenu'] = $this->Menu_model->get_all_submenu();
        $data['menu'] = $this->Menu_model->get_all_data();

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if($this->form_validation->run() ==false) {
        	 $this->load->view('Menu/submenu',$data);
        } else {
        	// insert data 
        	$data = [
        		'title' => $this->input->post('title'),
        		'menu_id' => $this->input->post('menu_id'),
        		'url' => $this->input->post('url'),
        		'icon' => $this->input->post('icon'),
        		'is_active' => $this->input->post('is_active')
        	];
        	$this->db->insert('user_sub_menu', $data);
        	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New submenu added!</div>');   
            redirect('Menu/submenu');
        }

       
	}
    // add by maulana 7-4-22

     public function edit_Submenu($id){
        $data['title'] = 'Edit Submenu';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->input->post('submit')) {
            $id       = $this->input->post('id');
            $title = $this->input->post('title');
            $menu     = $this->input->post('menu');
            $url  = $this->input->post('url');
            $menu_id  = $this->input->post('menu_id');
            $icon  = $this->input->post('icon');
            $data = $this->Menu_model->edit_smenu($id,$title,$menu,$menu_id,$url,$icon);   
            // var_dump($data);     
            redirect('Menu/submenu');
            return true;
        }

        $data['s_menu'] = $this->Menu_model->get_edit_Smenu($id);
        $this->load->view('Menu/v_edit_Smenu',$data);
    
    }

    public function activateSmenu(){
        $result= $this->Menu_model->activateSmenu($this->input->post());
        redirect('menu/submenu');
    }
}