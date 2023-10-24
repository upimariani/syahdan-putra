<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiBeras extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksiBeras');
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksiBeras->select_all()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vTransaksiBeras', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function detail($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksiBeras->detail_transaksi($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vDetailTransaksiBeras', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function konfirmasi($id)
	{
		$data = array(
			'status_transaksi' => '2'
		);
		$this->mTransaksiBeras->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Beras berhasil dikonfirmasi!');
		redirect('Admin/cTransaksiBeras/detail/' . $id);
	}
	public function dikirim($id)
	{
		$data = array(
			'status_transaksi' => '3'
		);
		$this->mTransaksiBeras->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Beras berhasil dikirim!');
		redirect('Admin/cTransaksiBeras/detail/' . $id);
	}
}

/* End of file cTransaksiBeras.php */
