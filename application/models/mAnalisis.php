<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function periode($id_beras)
	{
		return $this->db->query("SELECT SUM(kg_beras) as qty, detail_transaksi.id_beras, MONTH(tgl_transaksi) as bulan FROM `transaksi_beras` JOIN detail_transaksi ON transaksi_beras.id_transaksi=detail_transaksi.id_transaksi JOIN beras ON beras.id_beras=detail_transaksi.id_beras WHERE detail_transaksi.id_beras='" . $id_beras . "' GROUP BY detail_transaksi.id_beras, MONTH(tgl_transaksi)")->result();
	}
}

/* End of file mAnalisis.php */
