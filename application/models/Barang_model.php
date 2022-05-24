<?php
class Barang_model extends CI_Model{

	function list_barang_masuk(){
		$query=$this->db->query("SELECT * from tb_barang_masuk ORDER BY tanggal DESC")->result();
		return $query;
	}

	function list_satuan(){
		$query=$this->db->query("SELECT * from tb_satuan")->result();
		return $query;
	}
	public function insert($tabel,$data){
		// var_dump($data);
		// exit;
		return $this->db->insert($tabel,$data);

	}

	public function delete($tabel,$where)
	{
		$this->db->where($where);
		$this->db->delete($tabel);
	}

	public function get_data($tabel,$id_transaksi)
	{
		$query = $this->db->select()
		->from($tabel)
		->where($id_transaksi)
		->get();
		return $query->result();
	}

	public function update($tabel,$data,$where)
	{
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}

	public function select($tabel)
	{

		$query = $this->db->get($tabel);
		return $query->result();
	}


}