<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSupplier extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('supplier', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('supplier');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->where('id_supplier', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_supplier', $id);
		$this->db->update('supplier', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_supplier', $id);
		$this->db->delete('supplier');
	}
}

/* End of file mSupplier.php */
