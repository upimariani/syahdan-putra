<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mBeras');
		$this->load->model('mAnalisis');
	}
	public function index()
	{
		$data = array(
			'beras' => $this->mBeras->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function viewdetail($id_beras)
	{
		$data = array(
			'periode' => $this->mAnalisis->periode($id_beras)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vDetailAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cAnalisis.php */
