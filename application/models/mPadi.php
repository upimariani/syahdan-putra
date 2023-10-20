<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPadi extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('padi', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('padi');
		$this->db->where('id_supplier', $this->session->userdata('id'));

		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('padi');
		$this->db->where('id_padi', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_padi', $id);
		$this->db->update('padi', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_padi', $id);
		$this->db->delete('padi');
	}
}

/* End of file mPadi.php */
