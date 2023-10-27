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
			'transaksi' => $this->mTransaksiPadi->select(),
			'supplier' => $this->mSupplier->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vTransaksiPadi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create($id_supplier = NULL)
	{
		$id_supplier = $this->input->post('supplier');
		$data = array(
			'bb' => $this->mTransaksiPadi->padi($id_supplier),
			'id_supplier' => $id_supplier
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vCreateTransaksiPadi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function addtocart()
	{
		$data = array(
			'id' => $this->input->post('padi'),
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('harga'),
			'qty' => $this->input->post('qty'),
			'stok' => $this->input->post('stok')
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'Bahan Baku Berhasil Masuk Keranjang!');


		$id_supplier = $this->input->post('id_supplier');
		$data = array(
			'bb' => $this->mTransaksiPadi->padi($id_supplier),
			'id_supplier' => $id_supplier
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vCreateTransaksiPadi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function hapus($id, $id_supplier)
	{
		$this->cart->remove($id);
		$data = array(
			'bb' => $this->mTransaksiPadi->padi($id_supplier),
			'id_supplier' => $id_supplier
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vCreateTransaksiPadi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function selesai()
	{
		$data = array(
			'id_supplier' => $this->input->post('id_supplier'),
			'tgl_pesan' => date('Y-m-d'),
			'total_pesan' => $this->cart->total(),
			'status_pesan' => '0',
			'bukti_pembayaran' => '0'
		);
		$this->mTransaksiPadi->insert($data);

		$id = $this->db->query("SELECT MAX(id_pesan) as id FROM `pemesanan_padi`")->row();

		foreach ($this->cart->contents() as $key => $value) {
			$pesanan = array(
				'id_pesan' => $id->id,
				'id_padi' => $value['id'],
				'kg_padi' => $value['qty'],
				'stok_padi' => $value['qty']
			);
			$this->mTransaksiPadi->insert_detail($pesanan);
		}
		$this->cart->destroy();
		$this->session->set_flashdata('success', 'Transaksi berhasil Dipesan!');
		redirect('Admin/cTransaksiPadi');
	}
	public function detail($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksiPadi->detail_transaksi($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/navbar');
		$this->load->view('Admin/vDetailTransaksiPadi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function bayar($id)
	{
		$config['upload_path']          = './asset/pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 50000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('bayar')) {
			$data = array(
				'transaksi' => $this->mTransaksiPadi->detail_transaksi($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/navbar');
			$this->load->view('Admin/vDetailTransaksiPadi', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {

			$upload_data =  $this->upload->data();
			$data = array(
				'bukti_pembayaran' => $upload_data['file_name'],
				'status_pesan' => '1'
			);
			$this->mTransaksiPadi->bayar($id, $data);
			$this->session->set_flashdata('success', 'Transaksi Berhasil Dikirim!!!');
			redirect('Admin/cTransaksiPadi', 'refresh');
		}
	}
	public function pesanan_diterima($id)
	{
		$data = array(
			'status_pesan' => '4'
		);
		$this->mTransaksiPadi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Padi berhasil diterima!');
		redirect('Admin/cTransaksiPadi');
	}
}

/* End of file cTransaksiPadi.php */
