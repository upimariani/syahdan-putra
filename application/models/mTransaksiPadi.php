<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksiPadi extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('pemesanan_padi');
		$this->db->join('supplier', 'pemesanan_padi.id_supplier = supplier.id_supplier', 'left');
		return $this->db->get()->result();
	}
	public function padi($id_supplier)
	{
		$this->db->select('*');
		$this->db->from('padi');
		$this->db->where('id_supplier', $id_supplier);
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('pemesanan_padi', $data);
	}
	public function insert_detail($data)
	{
		$this->db->insert('detail_pesan', $data);
	}
	public function detail_transaksi($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM `pemesanan_padi` JOIN supplier ON pemesanan_padi.id_supplier=supplier.id_supplier WHERE id_pesan='" . $id . "'")->row();
		$data['detail'] = $this->db->query("SELECT * FROM `pemesanan_padi` JOIN detail_pesan ON detail_pesan.id_pesan=pemesanan_padi.id_pesan JOIN padi ON padi.id_padi=detail_pesan.id_padi WHERE pemesanan_padi.id_pesan='" . $id . "'")->result();
		return $data;
	}
	public function bayar($id, $data)
	{
		$this->db->where('id_pesan', $id);
		$this->db->update('pemesanan_padi', $data);
	}

	//supplier
	public function select_supplier()
	{
		$this->db->select('*');
		$this->db->from('pemesanan_padi');
		$this->db->join('supplier', 'pemesanan_padi.id_supplier = supplier.id_supplier', 'left');
		$this->db->where('supplier.id_supplier', $this->session->userdata('id'));

		return $this->db->get()->result();
	}
	public function update_status($id, $data)
	{
		$this->db->where('id_pesan', $id);
		$this->db->update('pemesanan_padi', $data);
	}
}

/* End of file mTransaksiPadi.php */
