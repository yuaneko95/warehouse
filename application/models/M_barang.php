<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_barang extends CI_Model {



	public function __construct()
	{
		parent::__construct();
		
	}

	function show_all($table)
	{
		$this->db->from($table);
		return $query = $this->db->get();
	}

	function insert($data, $table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	function detail($where, $table)
	{
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