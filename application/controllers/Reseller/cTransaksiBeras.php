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
	public function detail($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksiBeras->detail_transaksi($id)
		);
		$this->load->view('Reseller/Layouts/head');
		$this->load->view('Reseller/Layouts/navbar');
		$this->load->view('Reseller/vDetailTransaksiBeras', $data);
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
	public function selesai()
	{
		$data = array(
			'id_user' => $this->session->userdata('id'),
			'tgl_transaksi' => date('Y-m-d'),
			'total_transaksi' => $this->cart->total(),
			'status_transaksi' => '0',
			'bukpem_transaksi' => '0'
		);
		$this->mTransaksiBeras->insert_transaksi($data);

		//update stok beras
		foreach ($this->car->contents() as $key => $value) {
			$update_stok = array(
				'stok_beras' => $value['stok'] - $value['qty']
			);
			$this->db->where('id_beras', $value['id']);
			$this->db->update('beras', $update_stok);
		}

		$id = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi_beras`")->row();

		foreach ($this->cart->contents() as $key => $value) {
			$pesanan = array(
				'id_transaksi' => $id->id,
				'id_beras' => $value['id'],
				'kg_beras' => $value['qty']
			);
			$this->mTransaksiBeras->insert_detail($pesanan);
		}
		$this->cart->destroy();
		$this->session->set_flashdata('success', 'Transaksi berhasil Dikirim!');
		redirect('Reseller/cTransaksiBeras');
	}
	public function bayar($id)
	{
		$config['upload_path']          = './asset/pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 50000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('bayar')) {
			$data = array(
				'transaksi' => $this->mTransaksiBeras->detail_transaksi($id)
			);
			$this->load->view('Reseller/Layouts/head');
			$this->load->view('Reseller/Layouts/navbar');
			$this->load->view('Reseller/vDetailTransaksiBeras', $data);
			$this->load->view('Reseller/Layouts/footer');
		} else {

			$upload_data =  $this->upload->data();
			$data = array(
				'bukpem_transaksi' => $upload_data['file_name'],
				'status_transaksi' => '1'
			);
			$this->mTransaksiBeras->update_status($id, $data);
			$this->session->set_flashdata('success', 'Pembayaran Berhasil Dikirim!!!');
			redirect('Reseller/cTransaksiBeras', 'refresh');
		}
	}
	public function pesanan_diterima($id)
	{
		$data = array(
			'status_transaksi' => '4'
		);
		$this->mTransaksiBeras->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Beras berhasil diterima!');
		redirect('Reseller/cTransaksiBeras', 'refresh');
	}
}

/* End of file cTransaksiBeras.php */
