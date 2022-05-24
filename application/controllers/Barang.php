<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
         // fungsi untuk mencegah user masuk tanpa login dan berdasarkan role menggunakan file helper
		is_logg_in();
		$this->load->model('Barang_model');
	}

	// add by maulana 10-4-22
	public function index() {
		$data['title'] = 'Tabel Barang Masuk';
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['list_data'] = $this->Barang_model->list_barang_masuk();
		$data['list_satuan'] = $this->Barang_model->list_satuan();
		$this->load->view('barang/tabel_barangmasuk',$data);
	}

	public function proses_databarang_masuk(){
		
		$this->form_validation->set_rules('lokasi','Lokasi','required');
		$this->form_validation->set_rules('kode_barang','Kode Barang','required');
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required');

		if($this->form_validation->run() == TRUE)
		{
			$id_transaksi = $this->input->post('id_transaksi',TRUE);
			$tanggal      = $this->input->post('tanggal',TRUE);
			$lokasi       = $this->input->post('lokasi',TRUE);
			$kode_barang  = $this->input->post('kode_barang',TRUE);
			$nama_barang  = $this->input->post('nama_barang',TRUE);
			$satuan       = $this->input->post('satuan',TRUE);
			$jumlah       = $this->input->post('jumlah',TRUE);

			$data = array(
				'id_transaksi' => $id_transaksi,
				'tanggal'      => $tanggal,
				'lokasi'       => $lokasi,
				'kode_barang'  => $kode_barang,
				'nama_barang'  => $nama_barang,
				'satuan'       => $satuan,
				'jumlah'       => $jumlah
			);
			$this->Barang_model->insert('tb_barang_masuk',$data);
			$this->session->set_flashdata('msg_berhasil','Data Barang Berhasil Ditambahkan');
			redirect('Barang',$data);
		}else {
			$data['title'] = 'Tabel Barang Masuk';
			$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
			$data['list_data'] = $this->Barang_model->list_barang_masuk();
			// $data['list_satuan'] = $this->Barang_model->list_satuan();
			// var_dump($data);
			redirect('Barang',$data);
		}
	}

	public function update_barang($id_transaksi)
	{
		$data['title'] = 'Update Barang Masuk';
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$where = array('id_transaksi' => $id_transaksi);
		$data['data_barang_update'] = $this->Barang_model->get_data('tb_barang_masuk',$where);
		$data['list_satuan'] = $this->Barang_model->list_satuan();
		// var_dump($data);
		$this->load->view('barang/form_update',$data);
	}

	public function proses_databarang_masuk_update()
	{
		$this->form_validation->set_rules('lokasi','Lokasi','required');
		$this->form_validation->set_rules('kode_barang','Kode Barang','required');
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required');

		if($this->form_validation->run() == TRUE)
		{
			$id_transaksi = $this->input->post('id_transaksi',TRUE);
			$tanggal      = $this->input->post('tanggal',TRUE);
			$lokasi       = $this->input->post('lokasi',TRUE);
			$kode_barang  = $this->input->post('kode_barang',TRUE);
			$nama_barang  = $this->input->post('nama_barang',TRUE);
			$satuan       = $this->input->post('satuan',TRUE);
			$jumlah       = $this->input->post('jumlah',TRUE);

			$where = array('id_transaksi' => $id_transaksi);
			$data = array(
				'id_transaksi' => $id_transaksi,
				'tanggal'      => $tanggal,
				'lokasi'       => $lokasi,
				'kode_barang'  => $kode_barang,
				'nama_barang'  => $nama_barang,
				'satuan'       => $satuan,
				'jumlah'       => $jumlah
			);
			$this->Barang_model->update('tb_barang_masuk',$data,$where);
			$this->session->set_flashdata('msg_berhasil','Data Barang Berhasil Diupdate');
			redirect('Barang');
		}else{
			$this->load->view('barang/form_update');
		}
	}

	public function delete_barang($id_transaksi)
	{
		$where = array('id_transaksi' => $id_transaksi);
		$this->Barang_model->delete('tb_barang_masuk',$where);
		redirect('Barang');
	}


	// barang keluar//////////////////////////////////////////////
	//////////////////////////////////////////////////////////////

	public function barang_keluar()
	{
		$data['title'] = 'Update Barang Masuk';
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$uri = $this->uri->segment(3);
		$where = array( 'id_transaksi' => $uri);
		$data['list_data'] = $this->Barang_model->get_data('tb_barang_masuk',$where);
		$data['list_satuan'] = $this->Barang_model->select('tb_satuan');
		$this->load->view('barang/form_perpindahan_barang',$data);
	}

	public function proses_data_keluar()
	{
		$this->form_validation->set_rules('tanggal_keluar','Tanggal Keluar','trim|required');
		if($this->form_validation->run() === TRUE)
		{
			$id_transaksi   = $this->input->post('id_transaksi',TRUE);
			$tanggal_masuk  = $this->input->post('tanggal',TRUE);
			$tanggal_keluar = $this->input->post('tanggal_keluar',TRUE);
			$lokasi         = $this->input->post('lokasi',TRUE);
			$kode_barang    = $this->input->post('kode_barang',TRUE);
			$nama_barang    = $this->input->post('nama_barang',TRUE);
			$satuan         = $this->input->post('satuan',TRUE);
			$jumlah         = $this->input->post('jumlah',TRUE);

			$where = array( 'id_transaksi' => $id_transaksi);
			$data = array(
				'id_transaksi' => $id_transaksi,
				'tanggal_masuk' => $tanggal_masuk,
				'tanggal_keluar' => $tanggal_keluar,
				'lokasi' => $lokasi,
				'kode_barang' => $kode_barang,
				'nama_barang' => $nama_barang,
				'satuan' => $satuan,
				'jumlah' => $jumlah
			); 
			$this->Barang_model->insert('tb_barang_keluar',$data);
			$this->session->set_flashdata('msg_berhasil_keluar','Data Berhasil Keluar');
        // var_dump($data);
        // die;
			redirect('Barang');
		}else {
			$this->load->view('barang/form_perpindahan_barang'.$id_transaksi);
		}

	}
	// end by maulana 10-4-22

	public function barangkeluar()
	{
		$data['title'] = 'Barang Keluar';
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['list_data'] = $this->Barang_model->select('tb_barang_keluar');
		$this->load->view('barang/tabel_barangkeluar',$data);
	}


	public function tabel_satuan()
	{
		$data['title'] = 'Tabel satuan';
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['list_data'] = $this->Barang_model->select('tb_satuan');
		$this->load->view('barang/tabel_satuan',$data);
	}

	public function delete_satuan()
	{
		$uri = $this->uri->segment(3);
		$where = array('id_satuan' => $uri);
		$this->Barang_model->delete('tb_satuan',$where);
		redirect(base_url('barang/tabel_satuan'));
	}
	
	public function proses_satuan_insert()
	{
		$this->form_validation->set_rules('kode_satuan','Kode Satuan','trim|required|max_length[100]');
		$this->form_validation->set_rules('nama_satuan','Nama Satuan','trim|required|max_length[100]');

		if($this->form_validation->run() ==  TRUE)
		{
			$kode_satuan = $this->input->post('kode_satuan' ,TRUE);
			$nama_satuan = $this->input->post('nama_satuan' ,TRUE);

			$data = array(
				'kode_satuan' => $kode_satuan,
				'nama_satuan' => $nama_satuan
			);
			$this->Barang_model->insert('tb_satuan',$data);

			$this->session->set_flashdata('msg_berhasil','Data satuan Berhasil Ditambahkan');
			redirect(base_url('barang/tabel_satuan'));
		}else {
			redirect(base_url('barang/tabel_satuan'));
		}
	}

	public function update_satuan()
	{
		$data['title'] = 'Form Update satuan';
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$uri = $this->uri->segment(3);
		$where = array('id_satuan' => $uri);
		$data['data_satuan'] = $this->Barang_model->get_data('tb_satuan',$where);
		$this->load->view('barang/form_update_satuan',$data);
	}

	public function mengurangi($tabel,$id_transaksi,$jumlah)
	{
		$this->db->set("jumlah","jumlah - $jumlah");
		$this->db->where('id_transaksi',$id_transaksi);
		$this->db->update($tabel);
	}

	public function proses_satuan_update()
	{
		$this->form_validation->set_rules('kode_satuan','Kode Satuan','trim|required|max_length[100]');
		$this->form_validation->set_rules('nama_satuan','Nama Satuan','trim|required|max_length[100]');

		if($this->form_validation->run() ==  TRUE)
		{
			$id_satuan   = $this->input->post('id_satuan' ,TRUE);
			$kode_satuan = $this->input->post('kode_satuan' ,TRUE);
			$nama_satuan = $this->input->post('nama_satuan' ,TRUE);

			$where = array(
				'id_satuan' => $id_satuan
			);

			$data = array(
				'kode_satuan' => $kode_satuan,
				'nama_satuan' => $nama_satuan
			);
			$this->Barang_model->update('tb_satuan',$data,$where);

			$this->session->set_flashdata('msg_berhasil','Data satuan Berhasil Di Update');
			redirect(base_url('barang/tabel_satuan'));
		}else {
			$this->load->view('barang/form_update_satuan');
		}
	}
}