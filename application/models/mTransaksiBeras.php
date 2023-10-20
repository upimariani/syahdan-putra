<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksiBeras extends CI_Model
{
	//transaksi reseller
	public function select()
	{
		$this->db->select('*');
		$this->db->from('transaksi_beras');
		$this->db->join('user', 'transaksi_beras.id_user = user.id_user', 'left');
		$this->db->where('user.id_user', $this->session->userdata('id'));
		return $this->db->get()->result();
	}
}

/* End of file mTransaksiBeras.php */
