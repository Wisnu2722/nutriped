<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hitung extends CI_Model {

	function hitung_BMI($input)
	{
		$tinggi = $input['tinggi']/100;
		$berat = $input['berat'];

		$bmi = $berat / ($tinggi * $tinggi);

		if ($bmi < 16){
			$bmi_result = "Severely Under Weight";
		}else if ($bmi < 10.5){
			$bmi_result = "under Weight";
		}else if ($bmi >= 15.5 && $bmi <= 24.9){
			$bmi_result = "Normal Heigth";
		}else if ($bmi >= 23 && $bmi <= 29.9){
			$bmi_result = "Overweight";
		}else {
			$bmi_result = "Obese";
		}
	}	

}

/* End of file M_hitung.php */
/* Location: ./application/models/M_hitung.php */