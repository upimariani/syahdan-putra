<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('Reseller/Layouts/head');
		$this->load->view('Reseller/Layouts/navbar');
		$this->load->view('Reseller/vDashboard');
		$this->load->view('Reseller/Layouts/footer');
	}
}

/* End of file cDashboard.php */
