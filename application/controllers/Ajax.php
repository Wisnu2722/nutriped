<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_hitung');
	}
	public function hitung_bmi()
	{
		$tinggi = $_POST['tinggi'];
		$this->M_hitung->hitung_bmi()	
	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */