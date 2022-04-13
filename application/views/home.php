<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/acbc9e7676.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>">
</head>
<body>
	<!-- <header>
	<div class="logo">
		<span id="nutri"><b>Nutriped</b></span><br>
		<span id="sub-nutri">Analisis Gizi Jadi Lebih Mudah</span>
	</div>
	<ul class="navigation">
		<li><a href="#" class="pop">Beranda</a></li>
		<li><a href="#" class="pop">Status Gizi</a></li>
		<li><a href="#" class="pop">Gizi Atlet</a></li>
		<li><a href="#" class="pop">Gizi Anak</a></li>
		<li><a href="#" class="pop">NCP</a></li>
		<li><a href="#" class="pop">Tentang</a></li>
	</ul>	
	<div class="login">
		<a href="<?php echo base_url("login") ?>" class="btn btn-login">Login</a>
	
		<a href="<?php echo base_url("sign-up") ?>" class="btn btn-sign-up"><i class="fa-solid fa-user-group"></i> Sign Up</a>
		
	</div>
	<header> -->

		<!-- <nav class="navbar navbar-expand-sm navbar-dark bg-primary flex-sm-nowrap flex-wrap">
			<div class="container-fluid">
				<button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5">
					<span class="navbar-toggler-icon"></span>
				</button>
				<span class="navbar-brand flex-grow-1">Nutriped</span>
				<div class="navbar-collapse collapse flex-grow-1 " id="navbar5">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">Beranda</a>

						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Gizi Atlet</a>

						</li>
						<li class="nav-item">

							<a href="#" class="nav-link">Gizi Anak</a>
						</li>
						<li class="nav-item">

						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Status Gizi</a>

						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">NCP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tentang</a>
						</li>
					</ul>
				</div>
				<div class="flex-grow-1">
					hahaha
				</div>
			</div>
		</nav> -->

		<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
			
			<span class="" id="img-nutri">
				<img src="<?php echo base_url("assets/img/nutri.png") ?>">
			</span>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
				<ul class="navbar-nav w-100 justify-content-center">

					<li class="nav-item">
						<a href="#" class="nav-menu">Beranda</a>

					</li>
					<li class="nav-item">
						<a href="#" class="nav-menu">Gizi Atlet</a>

					</li>
					<li class="nav-item">

						<a href="#" class="nav-menu">Gizi Anak</a>
					</li>
					<li class="nav-item">

					</li>
					<li class="nav-item">
						<a href="#" class="nav-menu">Status Gizi</a>

					</li>

					<li class="nav-item">
						<a href="" class="nav-menu">NCP</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-menu">Tentang</a>
					</li>

				</ul>
				<ul class="nav navbar-nav ms-auto col-auto justify-content-end">
					<li class="nav-item">
						<a href="<?php echo base_url("login") ?>" class="btn btn-login">Login</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url("sign-up") ?>" class="btn btn-sign-up"><i class="fa-solid fa-user-group"></i> Sign Up</a>
					</li>

				</ul>
			</div>
			
		</nav>

		<div class="content">
			<div class="container">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-6 col-12">
							<h4>Analisis Sekarang</h4>
							<h2>Body Mass Index (BMI)</h2>
							<br>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis orci purus iaculis quam mauris tincidunt morbi. Fusce ut elementum convallis mi amet, dolor. Dolor, eget eget massa elit imperdiet sit. Viverra egestas tellus adipiscing nunc.
							</p>
							<br>
							<form method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-6 col-12 tinggi form-input">
												
													<p>Tinggi (cm)</p>
													<input type="number" name="tinggi" placeholder=""  required="">
												
											</div>

											<div class="col-md-6 col-12 berat">
												
													<p>Berat (kg)</p>
													<input type="number" name="berat" placeholder=""  required="">
												
											</div>
											<div class="col-md-12">
												<button class="btn btn-primary btn-sm btn-block" name="hitung">HITUNG</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-12">
							<div class="result shadow">
								<div class="row">
									<div class="col-md-2">
										<div class="tingkat-1"></div>
										<div class="tingkat-2"></div>
										<div class="tingkat-3"></div>
										<div class="tingkat-4"></div>
										<div class="tingkat-5"></div>
										<div class="tingkat-6"></div>
									</div>
									<div class="col-md-10 text-center">

										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									</div>
									
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("button[name=hitung]").on("click",function(){
			var tinggi = $("input[name=tinggi]").val();
			var berat = $("input[name=berat]").val();
			$.ajax({
				type:POST,
				url:"<?php echo base_url("ajax/hitung_bmi") ?>",
				data:"tinggi="+tinggi+"&berat="+berat,
			})
		})
	})
</script>
	</body>
	</html>