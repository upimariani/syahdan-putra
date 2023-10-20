<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('vLogin');
		} else {
			$hak_akses = $this->input->post('hak_akses');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($hak_akses == '1') {
				$login = $this->mLogin->auth($username, $password);
				if ($login) {
					$username = $login->username;
					$id = $login->id_user;
					$nama = $login->nama_user;
					$type_user = $login->type_user;

					$array = array(
						'id' => $id,
						'nama' => $nama,
						'type_user' => $type_user
					);

					$this->session->set_userdata($array);

					if ($type_user == '1') {
						redirect(base_url('Admin/cDashboard'));
					} else {
						redirect('Reseller/cDashboard');
					}
				} else {
					$this->session->set_flashdata('error', 'Username dan Password Salah!!!');
					redirect('cLogin');
				}
			} else if ($hak_akses == '2') {
				$login = $this->mLogin->auth_supplier($username, $password);
				if ($login) {
					$username = $login->username_supp;
					$id = $login->id_supplier;
					$nama = $login->nama_supplier;

					$array = array(
						'id' => $id,
						'nama' => $nama
					);

					$this->session->set_userdata($array);
					redirect(base_url('Supplier/cDashboard'));
				} else {
					$this->session->set_flashdata('error', 'Username dan Password Salah!!!');
					redirect('cLogin');
				}
			}
		}
	}
	public function logout()
	{
		$this->cart->destroy();

		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('type_user');

		$this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
		redirect('cLogin');
	}
	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama Reseller', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('vRegistrasi');
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_tlpon' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'type_user' => '2'
			);
			$this->db->insert('user', $data);
			$this->session->set_flashdata('success', 'Reseller berhasil registrasi! Silahkan Login!');
			redirect('cLogin');
		}
	}
}

/* End of file cLogin.php */
