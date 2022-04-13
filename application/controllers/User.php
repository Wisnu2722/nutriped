<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}
	public function login()
	{
		$input = $this->input->post();
		if($input)
		{
			$this->M_user->login($input);
		}
		$this->load->view('login');

	}

	public function register()
	{
		$input = $this->input->post();
		if($input)
		{
			$this->M_user->register($input);
		}
		$this->load->view('register');

	}



}

/* End of file User.php */
/* Location: ./application/controllers/User.php */