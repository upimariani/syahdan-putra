<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cPadi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPadi');
	}

	//data padi
	public function index()
	{
		$data = array(
			'padi' => $this->mPadi->select()
		);
		$this->load->view('Supplier/Layouts/head');
		$this->load->view('Supplier/Layouts/navbar');
		$this->load->view('Supplier/vPadi', $data);
		$this->load->view('Supplier/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'id_supplier' => $this->session->userdata('id'),
			'nama_padi' => $this->input->post('nama'),
			'jenis_padi' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga'),
			'stok_padi' => $this->input->post('stok')
		);
		$this->mPadi->insert($data);
		$this->session->set_flashdata('success', 'Data padi Berhasil Ditambahkan!');
		redirect('Supplier/cPadi');
	}
	public function update($id)
	{
		$data = array(
			'id_supplier' => $this->session->userdata('id'),
			'nama_padi' => $this->input->post('nama'),
			'jenis_padi' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga'),
			'stok_padi' => $this->input->post('stok')
		);
		$this->mPadi->update($id, $data);
		$this->session->set_flashdata('success', 'Data padi Berhasil Diperbaharui!');
		redirect('Supplier/cPadi');
	}
	public function detele($id)
	{
		$this->mPadi->delete($id);
		$this->session->set_flashdata('success', 'Data padi Berhasil Dihapus!');
		redirect('Supplier/cPadi');
	}
}

/* End of file cPadi.php */
