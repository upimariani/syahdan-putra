<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKelolaDataMaster extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
		$this->load->model('mSupplier');
		$this->load->model('mBeras');
		$this->load->model('mPadi');
	}

	//data user
	public function user()
	{
		$data = array(
			'user' => $this->mUser->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vUser', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function createuser()
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'no_tlpon' => $this->input->post('no_hp'),
			'type_user' => $this->input->post('type')
		);
		$this->mUser->insertUser($data);
		$this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan!');
		redirect('Admin/cKelolaDataMaster/user');
	}
	public function updateuser($id)
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'no_tlpon' => $this->input->post('no_hp'),
			'type_user' => $this->input->post('type')
		);
		$this->mUser->update($id, $data);
		$this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!');
		redirect('Admin/cKelolaDataMaster/user');
	}
	public function deteleuser($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User Berhasil Dihapus!');
		redirect('Admin/cKelolaDataMaster/user');
	}

	//data supplier--------------------------------------------------------------------------
	public function supplier()
	{
		$data = array(
			'supplier' => $this->mSupplier->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vsupplier', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function createsupplier()
	{
		$data = array(
			'nama_supplier' => $this->input->post('nama'),
			'alamat_supplier' => $this->input->post('alamat'),
			'username_supp' => $this->input->post('username'),
			'pass_supp' => $this->input->post('password'),
			'no_hp_supplier' => $this->input->post('no_hp')
		);
		$this->mSupplier->insert($data);
		$this->session->set_flashdata('success', 'Data Supplier Berhasil Ditambahkan!');
		redirect('Admin/cKelolaDataMaster/supplier');
	}
	public function updatesupplier($id)
	{
		$data = array(
			'nama_supplier' => $this->input->post('nama'),
			'alamat_supplier' => $this->input->post('alamat'),
			'username_supp' => $this->input->post('username'),
			'pass_supp' => $this->input->post('password'),
			'no_hp_supplier' => $this->input->post('no_hp')
		);
		$this->mSupplier->update($id, $data);
		$this->session->set_flashdata('success', 'Data supplier Berhasil Diperbaharui!');
		redirect('Admin/cKelolaDataMaster/supplier');
	}
	public function detelesupplier($id)
	{
		$this->mSupplier->delete($id);
		$this->session->set_flashdata('success', 'Data supplier Berhasil Dihapus!');
		redirect('Admin/cKelolaDataMaster/supplier');
	}

	//data beras----------------------------------------------------------------
	public function beras()
	{
		$data = array(
			'beras' => $this->mBeras->select(),
			'padi' => $this->mPadi->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vberas', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function createberas()
	{
		$data = array(
			'id_padi' => $this->input->post('padi'),
			'nama_beras' => $this->input->post('nama'),
			'jenis_beras' => $this->input->post('jenis'),
			'harga_beras' => $this->input->post('harga'),
			'stok_beras' => $this->input->post('stok')
		);
		$this->mBeras->insert($data);
		$this->session->set_flashdata('success', 'Data Beras Berhasil Ditambahkan!');
		redirect('Admin/cKelolaDataMaster/beras');
	}
	public function updateberas($id)
	{
		$data = array(
			'id_padi' => $this->input->post('padi'),
			'nama_beras' => $this->input->post('nama'),
			'jenis_beras' => $this->input->post('jenis'),
			'harga_beras' => $this->input->post('harga'),
			'stok_beras' => $this->input->post('stok')
		);
		$this->mBeras->update($id, $data);
		$this->session->set_flashdata('success', 'Data beras Berhasil Diperbaharui!');
		redirect('Admin/cKelolaDataMaster/beras');
	}
	public function deteleberas($id)
	{
		$this->mBeras->delete($id);
		$this->session->set_flashdata('success', 'Data beras Berhasil Dihapus!');
		redirect('Admin/cKelolaDataMaster/beras');
	}
}

/* End of file cKelolaDataMaster.php */
