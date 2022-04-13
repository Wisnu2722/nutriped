<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	function login($input)
	{
		$username = $input['username'];
		$pass = md5($input['password']);
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		$get = $this->db->get('user', 1);
		$hitung	= $get->num_rows();

		if ($hitung > 0) 
		{
			$akun = $get->row_array();
			// $_SESSION['user'] = $akun;
			// return "sukses";
			echo "<script>alert('sukses')</script>";
		} 
		else 
		{
			echo "<script>alert('gagal')</script>";
			// return "gagal";
		}
	}

	function register($input)
	{
		$username = $input['username'];
		$pass = md5($input['password']);

		$this->db->where('username', $username);
		$get = $this->db->get('user');
		$hitung	= $get->num_rows();

		if ($hitung > 0) 
		{
			$akun = $get->row_array();
			// $_SESSION['user'] = $akun;
			// return "sukses";
			echo "<script>alert('username sudah digunakan')</script>";
		} 
		else 
		{
			echo "<script>alert('register berhasil')</script>";
			// return "gagal";
		}
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */