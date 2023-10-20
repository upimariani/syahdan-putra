<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLogin extends CI_Model
{
	public function auth($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array(
			'username' => $username,
			'password' => $password
		));
		return $this->db->get()->row();
	}

	public function auth_supplier($username, $password)
	{
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->where(array(
			'username_supp' => $username,
			'pass_supp' => $password
		));
		return $this->db->get()->row();
	}

	public function registerreseller($data)
	{
		$this->db->insert('user', $data);
	}
}

/* End of file mLogin.php */
