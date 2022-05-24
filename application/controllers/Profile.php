<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Profile extends CI_Controller {

	public function __construct(){
         parent::__construct();
         // fungsi untuk mencegah user masuk tanpa login dan berdasarkan role menggunakan file helper
         is_logg_in();
     }
    
    public function index() {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('Home/index',$data);
    }

    // add by maulana 3-4-22

    public function edit_profile() {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Adress', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('Home/v_edit_profile',$data);

        } else {
            $username = $this->input->post('username');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['profile_picture']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('profile_picture')) {
                    $old_image = $data['users']['profile_picture'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/profile/' . $old_image);
                    }
                    $profile_picture = $this->upload->data('file_name');
                    $this->db->set('profile_picture', $profile_picture);
                } else {
                    // menampilkan error
                    // echo $this->upload->dispay_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$this->upload->dispay_errors().'</div>');
                    redirect('profile');
                }
            }
            

            $this->db->set('nama', $nama);
            $this->db->set('email', $email);
            $this->db->set('alamat', $alamat);
            $this->db->where('username', $username);
            $this->db->update('users');

            // $update = $this->User_model->update_data();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('profile');
        }
    }

    // end by maulana 3-4-22
     
     

 }
