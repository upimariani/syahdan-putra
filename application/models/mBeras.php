<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBeras extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('beras', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('beras');
		$this->db->join('padi', 'beras.id_padi = padi.id_padi', 'left');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('beras');
		$this->db->where('id_beras', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_beras', $id);
		$this->db->update('beras', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_beras', $id);
		$this->db->delete('beras');
	}
}

/* End of file mBeras.php */
