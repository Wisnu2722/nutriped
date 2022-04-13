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
			<div class="container-fluid">

				<a href="#" class="navbar-brand">
					<img src="<?php echo base_url("assets/img/nutri.png") ?>" alt="">
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse collapse" id="collapsingNavbar3">
					<div class="navbar-nav">
						<a href="#" class="nav-menu">Beranda</a>
						<a href="#" class="nav-menu">Gizi Atlet</a>
						<a href="#" class="nav-menu">Gizi Anak</a>
						<a href="#" class="nav-menu">Status Gizi</a>
						<a href="" class="nav-menu">NCP</a>
						<a href="" class="nav-menu">Tentang</a>
					</div>

					<div class="d-flex">
						<a href="<?php echo base_url("login") ?>" class="btn btn-login mx-2">Login</a>
						<a href="<?php echo base_url("sign-up") ?>" class="btn btn-sign-up mx-2"><i class="fa-solid fa-user-group"></i> Sign Up</a>
					</div>
				</div>
			</div>
			
		</nav>

		<div class="content mx-auto my-4">
			<div class="container">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="container-fluid">
								<h4>Analisis Sekarang</h4>
								<h2>Body Mass Index (BMI)</h2>
								<br>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis orci purus iaculis quam mauris tincidunt morbi. Fusce ut elementum convallis mi amet, dolor. Dolor, eget eget massa elit imperdiet sit. Viverra egestas tellus adipiscing nunc.
								</p>
								<br>
								<form method="POST" class="d-flex row">
									<!--								<div class="input-group mb-3">-->
									<!--									<input type="text" class="form-control" placeholder="Username" aria-label="Username">-->
									<!--									<span class="input-group-text">@</span>-->
									<!--									<input type="text" class="form-control" placeholder="Server" aria-label="Server">-->
									<!--								</div>-->
									<div class="row mx-auto">
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
									</div>
									<button class="btn btn-primary btn-sm btn-block" name="hitung">HITUNG</button>
								</form>
							</div>
						</div>
						<div class="col-md-6 col-12 mt-3">
							<div class="container-fluid result shadow">
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
									<div class="col-md-10 col-12 text-center">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
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
				success:function(hasil)
				{
					alert(hasil);
				}
			})
		})
	})
</script>
	</body>
	</html>
