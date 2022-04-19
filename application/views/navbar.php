<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
			<div class="container-fluid">

				<a href="<?php echo base_url() ?>" class="navbar-brand">
					<img src="<?php echo base_url("assets/img/nutri.png") ?>" alt="">
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse collapse" id="collapsingNavbar3">
					<div class="navbar-nav">
						<a href="<?php echo base_url() ?>" class="nav-menu">Beranda</a>
						<a href="<?php echo base_url("gizi_atlet") ?>" class="nav-menu">Gizi Atlet</a>
						<a href="<?php echo base_url("gizi_anak") ?>" class="nav-menu">Gizi Anak</a>
						<a href="<?php echo base_url("status_gizi") ?>" class="nav-menu">Status Gizi</a>
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