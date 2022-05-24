<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

    public function index() {
        // add by maulana 3-4-22
        // mencegah user yang sudah login kembali ke menu login maupun register tanpa logout 
        if($this->session->userdata('username')) {
            redirect('profile');
        }
        // end by maulana 3-4-22
        // add by maulana 30-3-22
        // Fungsi Login
        // trim untuk mengcegah sepasi dibelakang atau diawal kalimat
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false){
            $data['title'] = 'Login';
            $this->load->view('Auth/login',$data);    
        } else {
            // validasi yang sukses 
            $this->_login();
        }
        
       
    }

    private function _login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // ambil data dari table 

        $user = $this->db-> get_where('users', ['username' => $username])->row_array();
             // user data ada
        if($user) {
           // jika user aktif 
            if($user['active'] == 1) {
                // cek password 
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    // simpan dalam session 
                    $this->session->set_userdata($data);
                    // cek sesuai role
                    if($user['role'] == 1) {
                         redirect('Admin');
                    } else {
                        redirect('Profile');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');   
            redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username has not been activated!</div>');   
            redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');   
            redirect('Auth');
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged off!</div>');   
            redirect('Auth');
    }

    public function blocked() {
        $this->load->view('auth/blocked');
    }
                
}
