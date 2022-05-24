 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class User extends CI_Controller {
    public function __construct(){
         parent::__construct();
         $this->load->library('form_validation');
         $this->load->model('User_model');
    }
    
     
     public function index() {
        // add by maulana 3-4-22
        // mencegah user yang sudah login kembali ke menu login maupun register tanpa logout 
        if($this->session->userdata('username')) {
            redirect('profile');
        }
        // end by maulana 3-4-22
        // untuk mencegah inputan spasi di depan maupun di belakang menggunakan trim
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[users.username]', ['is_unique' => 'This username has already registered!']);
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        // untuk mencegah duplicat email menggunakan is_unique dengan mencantumkan tabel dan kolom
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[users.email]', ['is_unique' => 'This email has already registered!']);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Password dont March!', 'min_length' => 'Password to short!']);
         $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        if ($this->form_validation->run() == false){
            $data['title'] = 'User Registratrion';
            $this->load->view('User/v_user_add',$data);
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'role' => 2,
                'active' => 1,
                'profile_picture' =>'no-photo.png'
            ];
            // $this->db->insert('users',$data);
            $insert = $this->User_model->registrasiUser($data);   
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! yout account has been created. Please Login</div>');   
            redirect('Auth');
        }
        
     }


 }
