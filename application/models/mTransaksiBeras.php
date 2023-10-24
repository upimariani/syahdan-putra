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
	public function insert_transaksi($data)
	{
		$this->db->insert('transaksi_beras', $data);
	}
	public function insert_detail($data)
	{
		$this->db->insert('detail_transaksi', $data);
	}


	public function detail_transaksi($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi_beras` JOIN user ON transaksi_beras.id_user=user.id_user WHERE id_transaksi='" . $id . "'")->row();
		$data['detail'] = $this->db->query("SELECT * FROM `transaksi_beras` JOIN detail_transaksi ON transaksi_beras.id_transaksi=detail_transaksi.id_transaksi JOIN beras ON beras.id_beras=detail_transaksi.id_beras WHERE transaksi_beras.id_transaksi='" . $id . "'")->result();
		return $data;
	}
	public function update_status($id, $status)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi_beras', $status);
	}

	//admin
	public function select_all()
	{
		$this->db->select('*');
		$this->db->from('transaksi_beras');
		$this->db->join('user', 'transaksi_beras.id_user = user.id_user', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mTransaksiBeras.php */
