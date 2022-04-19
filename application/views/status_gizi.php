<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Status Gizi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/acbc9e7676.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>">
</head>
<body>


		<?php $this->load->view('navbar'); ?>

		<div class="content mx-auto my-4">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-12">
						<div class="container-fluid">
							<h4>Antropometri</h4>
							<br>
							
							<form method="POST" class="d-flex row">
								
								<div class="row ">
									<div class="col-md col">
											<label for="">Estimasi:</label>
										<div class="form-group mt-2">
											<select class="form-select w-100">
												<option>Tinggi Badan</option>
												<option>Berat Badan</option>
											</select>
										</div>
									</div>
									<div class="col-md col">
											<label for="">Pilih Rumus:</label>
										<div class="form-group mt-2">
											<select class="form-select w-100">
												<option>Chumlea</option>
												<option>Berat Badan</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-md col">
											<label for="tinggi">Keterangan:</label>
										<div class="form-group mt-2">
											<textarea class="form-control" cols="6" rows="10" ></textarea>
										</div>
									</div>
								</div>
								<div class="row mt-4">
								<label>Pilih Gender :</label>
									<div class="col-md col">
										<div class="mt-2">
											<input class="form-check-input" type="radio" name="jk" placeholder=""  required=""> 
											<label class="form-check-label">Pria</label>
											
										</div>
									</div>
									<div class="col-md col">
										<div class="mt-2">
											<input class="form-check-input" type="radio" name="jk" placeholder=""  required=""> 
											<label class="form-check-label">Wanita</label>
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-md col">
										<div class="form-floating">
											<input class="form-control w-50" type="number" name="tinggi" placeholder=""  required="">
											<label for="tinggi">Tinggi (cm)</label>
										</div>
									</div>
									<div class="col-md col">
										<div class="form-floating">
											<input class="form-control w-50" type="number" name="berat" placeholder=""  required="">
											<label for="berat">Berat (kg)</label>

										</div>
									</div>
								<button class="btn btn-primary btn-sm btn-block" type="button" name="hitung">HITUNG</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-5 col-8 mt-5">
						<div class="result shadow">
							<div class="row">
								<div class="col-md-2 col-12">
									<div class="row">
										<div class="tingkat-1"></div>
										<div class="tingkat-2"></div>
										<div class="tingkat-3"></div>
										<div class="tingkat-4"></div>
										<div class="tingkat-5"></div>
										<div class="tingkat-6"></div>
									</div>
								</div>
								<div class="col-md-10 col-12 text-center my-auto  ">
									<div class="hasil-hitung text-center container-fluid">
										<span class="tipis">Hasil :</span>
										<br>
										<br>
										<h1>
											<b class="hasil-angka">XXX</b>
										</h1>
										<span class="hasil-kata">Lu Keren</span> 
										<br>
										<span class="tipis">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut 
										</span>

									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-2 col-4 mt-5">
						<div class="card card-kalkulator">
							<div class="card-header bg-info">
								<h6>Kalkulator Lainnya:</h6>
							</div>
							<div class="shadow">
								<ul class="menu-lain">
									
									<li><a href="">Status Gizi</a></li>
									<li><a href="">Gizi Atlet</a></li>
									<li><a href="">Gizi Anak</a></li>
									<li><a href="">NCP</a></li>
									
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<script src="<?php echo base_url("assets/js/jquery-3.6.0.min.js") ?>" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("button[name=hitung]").on("click",function(){
					var tinggi = $("input[name=tinggi]").val();
					var berat = $("input[name=berat]").val();

					$.ajax({
						type:'post',
						url:'<?php echo base_url("ajax/hitung_bmi") ?>',
						data:'tinggi='+tinggi+"&berat="+berat,
						success:function(hasil)
						{
							$(".hasil-hitung").html(hasil)
            // $("#matkul-relevan").html(hasil);
            // alert(hasil)
        }
    })
				})
			})
		</script>
	</body>
	</html>
