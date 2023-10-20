<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiBeras extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksiBeras');
		$this->load->model('mBeras');
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksiBeras->select()
		);
		$this->load->view('Reseller/Layouts/head');
		$this->load->view('Reseller/Layouts/navbar');
		$this->load->view('Reseller/vTransaksiBeras', $data);
		$this->load->view('Reseller/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'beras' => $this->mBeras->select()
		);
		$this->load->view('Reseller/Layouts/head');
		$this->load->view('Reseller/Layouts/navbar');
		$this->load->view('Reseller/vCreateTransaksiBeras', $data);
		$this->load->view('Reseller/Layouts/footer');
	}
	public function addtocart()
	{
		$data = array(
			'id' => $this->input->post('beras'),
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('harga'),
			'qty' => $this->input->post('qty'),
			'stok' => $this->input->post('stok')
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Beras Berhasil Masuk Keranjang!');
		redirect('Reseller/cTransaksiBeras/create');
	}
	public function hapus($id)
	{
		$this->cart->remove($id);
		$this->session->set_flashdata('success', 'Beras Berhasil dihapus!');
		redirect('Reseller/cTransaksiBeras/create');
	}
}

/* End of file cTransaksiBeras.php */
