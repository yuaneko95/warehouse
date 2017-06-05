<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_detail_pengirim extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function show_all($table)
	{
		$this->db->from($table);
		$this->db->join('barang', 'barang.id_barang = detail_pengirim.id_barang');
		$this->db->join('pengirim', 'pengirim.id_pengirim = detail_pengirim.id');
		$this->db->join('sopir', 'sopir.id_sopir = pengirim.id_sopir');
		$this->db->join('agen', 'agen.id_agen = pengirim.id_agen');
		return $query = $this->db->get();
	}

	function insert($data, $table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	function detail($where, $table)
	{
		$this->db->join('barang', 'barang.id_barang = detail_pengirim.id_barang');
		$this->db->join('pengirim', 'pengirim.id_pengirim = detail_pengirim.id');
		$this->db->join('sopir', 'sopir.id_sopir = pengirim.id_sopir');
		$this->db->join('agen', 'agen.id_agen = pengirim.id_agen');
		return $this->db->get_where($table, $where);
	}

	function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}



}

/* End of file M_sopir.php */
/* Location: ./application/models/M_sopir.php */