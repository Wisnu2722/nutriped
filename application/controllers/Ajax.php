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
		$berat = $_POST['berat'];

		$hasil = $this->M_hitung->hitung_BMI($tinggi, $berat);	
		?>
		<span class="tipis">BMI Kamu adalah :</span>
		<br>
		<br>
		<h1><b class="hasil-angka" style="font-weight: 12em;"><?php echo $hasil['angka'] ?></b></h1>
		
		<span class="hasil-kata"><?php echo $hasil['kata'] ?></span>
		<br>
		<span class="tipis">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut 
		</span>


		<?php

	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */