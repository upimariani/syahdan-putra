<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiPadi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksiPadi');
		$this->load->model('mSupplier');
	}
	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksiPadi->select_supplier()
		);
		$this->load->view('Supplier/Layouts/head');
		$this->load->view('Supplier/Layouts/navbar');
		$this->load->view('Supplier/vTransaksiPadi', $data);
		$this->load->view('Supplier/Layouts/footer');
	}
	public function detail($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksiPadi->detail_transaksi($id)
		);
		$this->load->view('Supplier/Layouts/head');
		$this->load->view('Supplier/Layouts/navbar');
		$this->load->view('Supplier/vDetailTransaksiPadi', $data);
		$this->load->view('Supplier/Layouts/footer');
	}
	public function konfirmasi($id)
	{
		$data = array(
			'status_pesan' => '2'
		);
		$this->mTransaksiPadi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Padi berhasil dikonfirmasi!');
		redirect('Supplier/cTransaksiPadi/detail/' . $id);
	}
	public function dikirim($id)
	{
		$data = array(
			'status_pesan' => '3'
		);
		$this->mTransaksiPadi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Padi berhasil dikirim!');
		redirect('Supplier/cTransaksiPadi/detail/' . $id);
	}
}

/* End of file cTransaksiPadi.php */
