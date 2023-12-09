<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RayfaTech.</title>
	<link rel="shortcut icon" href="{{ asset('rayfa-tech/favicon.ico') }}">

	{{-- Styling --}}
	@include('rayfatech/partials.styling');
	<link rel="stylesheet" href="{{ asset('rayfa-tech/css/style.css') }}">
</head>

<body id="home">
	<header class="header">
		<!-- Navbar -->
		<nav class="navbar navbar-dark navbar-expand-md shadow fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand fw-bold fst-italic" href="#">RayfaTech.</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleMenu()">
					<i class="fa-solid fa-bars" id="toggle1"></i>
					<i class="fa-solid fa-xmark d-none" id="toggle2"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li><a class="nav-link active" href="#home">Beranda</a></li>
						<li><a class="nav-link" href="#catalog">Katalog</a></li>
						<li><a class="nav-link" href="#about">Tentang Kami</a></li>
						<li><a class="nav-link" href="#contact">Kontak</a></li>
					</ul>
					<ul class="navbar-nav ms-auto">
						<li><a class="nav-link" href="/rayfatech/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Navbar End -->

		<div class="jumbotron">
			<h1 class="fw-bold fst-italic">RayfaTech.</h1>
			<h5>Menyediakan berbagai laptop dan notebook untuk keperluan sehari-hari hingga tuntutan profesional.</h5>
		</div>
	</header>

	<div id="backdrop" onclick="toggleMenu()"></div>

	<main class="scroll">
		<div class="wrapper" id="catalog">
			<div class="row mb-2">
				<div class="col text-center">
					<h3 class="fw-bold">Katalog</h3>
				</div>
			</div>
			<div class="row justify-content-around">
				<div class="col-md-4 mb-4">
					<div class="card">
						<img src="{{ asset('rayfa-tech/img/img-1.jpg') }}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">MacBook Pro 13"</h5>
							<p class="card-text">Rp22.000.000/unit</p>
							<div class="input-group input-group-sm" style="width: 10em">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-minus"></i>
								</button>
								<input type="text" class="form-control" aria-label="Cart">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-plus"></i>
								</button>
							</div>
						</div>
						<ul class="list-group list-group-flush">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading1">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
											Spesifikasi
										</button>
									</h2>
									<div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<li class="list-group-item">Layar Retina 13,3 inci16</li>
											<li class="list-group-item">Chip Apple M2</li>
											<li class="list-group-item">Memori terintegrasi 8 GB hingga 24 GB</li>
											<li class="list-group-item">Penyimpanan 256 GB hingga 2 TB14</li>
											<li class="list-group-item">Kekuatan baterai hingga 20 jam1</li>
											<li class="list-group-item">Touch Bar dan Touch ID</li>
										</div>
									</div>
								</div>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card">
						<img src="{{ asset('rayfa-tech/img/img-1.jpg') }}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">MacBook Pro 13"</h5>
							<p class="card-text">Rp22.000.000/unit</p>
							<div class="input-group input-group-sm" style="width: 10em">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-minus"></i>
								</button>
								<input type="text" class="form-control" aria-label="Cart">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-plus"></i>
								</button>
							</div>
						</div>
						<ul class="list-group list-group-flush">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
											Spesifikasi
										</button>
									</h2>
									<div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<li class="list-group-item">Layar Retina 13,3 inci16</li>
											<li class="list-group-item">Chip Apple M2</li>
											<li class="list-group-item">Memori terintegrasi 8 GB hingga 24 GB</li>
											<li class="list-group-item">Penyimpanan 256 GB hingga 2 TB14</li>
											<li class="list-group-item">Kekuatan baterai hingga 20 jam1</li>
											<li class="list-group-item">Touch Bar dan Touch ID</li>
										</div>
									</div>
								</div>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card">
						<img src="{{ asset('rayfa-tech/img/img-1.jpg') }}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">MacBook Pro 13"</h5>
							<p class="card-text">Rp22.000.000/unit</p>
							<div class="input-group input-group-sm" style="width: 10em">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-minus"></i>
								</button>
								<input type="text" class="form-control" aria-label="Cart">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-plus"></i>
								</button>
							</div>
						</div>
						<ul class="list-group list-group-flush">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading3">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
											Spesifikasi
										</button>
									</h2>
									<div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<li class="list-group-item">Layar Retina 13,3 inci16</li>
											<li class="list-group-item">Chip Apple M2</li>
											<li class="list-group-item">Memori terintegrasi 8 GB hingga 24 GB</li>
											<li class="list-group-item">Penyimpanan 256 GB hingga 2 TB14</li>
											<li class="list-group-item">Kekuatan baterai hingga 20 jam1</li>
											<li class="list-group-item">Touch Bar dan Touch ID</li>
										</div>
									</div>
								</div>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card">
						<img src="{{ asset('rayfa-tech/img/img-1.jpg') }}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">MacBook Pro 13"</h5>
							<p class="card-text">Rp22.000.000/unit</p>
							<div class="input-group input-group-sm" style="width: 10em">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-minus"></i>
								</button>
								<input type="text" class="form-control" aria-label="Cart">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-plus"></i>
								</button>
							</div>
						</div>
						<ul class="list-group list-group-flush">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading1">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
											Spesifikasi
										</button>
									</h2>
									<div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<li class="list-group-item">Layar Retina 13,3 inci16</li>
											<li class="list-group-item">Chip Apple M2</li>
											<li class="list-group-item">Memori terintegrasi 8 GB hingga 24 GB</li>
											<li class="list-group-item">Penyimpanan 256 GB hingga 2 TB14</li>
											<li class="list-group-item">Kekuatan baterai hingga 20 jam1</li>
											<li class="list-group-item">Touch Bar dan Touch ID</li>
										</div>
									</div>
								</div>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card">
						<img src="{{ asset('rayfa-tech/img/img-1.jpg') }}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">MacBook Pro 13"</h5>
							<p class="card-text">Rp22.000.000/unit</p>
							<div class="input-group input-group-sm" style="width: 10em">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-minus"></i>
								</button>
								<input type="text" class="form-control" aria-label="Cart">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-plus"></i>
								</button>
							</div>
						</div>
						<ul class="list-group list-group-flush">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
											Spesifikasi
										</button>
									</h2>
									<div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<li class="list-group-item">Layar Retina 13,3 inci16</li>
											<li class="list-group-item">Chip Apple M2</li>
											<li class="list-group-item">Memori terintegrasi 8 GB hingga 24 GB</li>
											<li class="list-group-item">Penyimpanan 256 GB hingga 2 TB14</li>
											<li class="list-group-item">Kekuatan baterai hingga 20 jam1</li>
											<li class="list-group-item">Touch Bar dan Touch ID</li>
										</div>
									</div>
								</div>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card">
						<img src="{{ asset('rayfa-tech/img/img-1.jpg') }}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">MacBook Pro 13"</h5>
							<p class="card-text">Rp22.000.000/unit</p>
							<div class="input-group input-group-sm" style="width: 10em">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-minus"></i>
								</button>
								<input type="text" class="form-control" aria-label="Cart">
								<button type="button" class="btn btn-primary">
									<i class="fa-solid fa-plus"></i>
								</button>
							</div>
						</div>
						<ul class="list-group list-group-flush">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading3">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
											Spesifikasi
										</button>
									</h2>
									<div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<li class="list-group-item">Layar Retina 13,3 inci16</li>
											<li class="list-group-item">Chip Apple M2</li>
											<li class="list-group-item">Memori terintegrasi 8 GB hingga 24 GB</li>
											<li class="list-group-item">Penyimpanan 256 GB hingga 2 TB14</li>
											<li class="list-group-item">Kekuatan baterai hingga 20 jam1</li>
											<li class="list-group-item">Touch Bar dan Touch ID</li>
										</div>
									</div>
								</div>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="wrapper" id="about">
			<div class="row mb-3">
				<div class="col text-center">
					<h3 class="fw-bold">Tentang Kami</h3>
				</div>
			</div>
			<div class="row justify-content-center align-items-center">
				<div class="col-md-6 mb-3">
					<img class="w-100" src="{{ asset('rayfa-tech/img/about-img.jpg') }}">
				</div>
				<div class="col-md-6">
					<p>RayfaTech, pilihan terpercaya untuk kebutuhan laptop dan notebook berkualitas. Kami menyediakan beragam pilihan laptop terbaik dari merek terkemuka, dengan penekanan pada kualitas, performa, dan keandalan. Dengan komitmen kami terhadap teknologi mutakhir, RayfaTech hadir untuk memenuhi kebutuhan komputasi Anda dengan jajaran laptop yang dirancang untuk memenuhi standar kinerja tertinggi. Dari keperluan sehari-hari hingga tuntutan profesional, RayfaTech menawarkan solusi laptop yang memadukan inovasi terkini dengan desain elegan dan daya tahan yang handal. Temukan laptop yang sempurna untuk kebutuhan Anda, hanya di RayfaTech.</p>
				</div>
			</div>
		</div>

		<div class="wrapper">
			<div class="row mb-3" id="contact">
				<div class="col text-center">
					<h3 class="fw-bold">Hubungi Kami</h3>
				</div>
			</div>
			<div class="row justify-content-center mb-3">
				<form class="col-md-6" method="POST" action="">
					@csrf
					<div class="form-floating mb-3">
						<input name="nama" type="text" class="form-control" id="nameInput" placeholder="Your Name">
						<label for="nameInput">Nama</label>
					</div>
					<div class="form-floating mb-3">
						<input name="email" type="email" class="form-control" id="emailInput" placeholder="name@example.com">
						<label for="emailInput">Email</label>
					</div>
					<div class="form-floating mb-3">
						<textarea class="form-control" placeholder="Leave a comment here" id="msgInput" style="height: 100px"></textarea>
						<label for="msgInput">Pesan Anda</label>
					</div>
					<span class="d-flex justify-content-end">
						<button type="submit" class="btn btn-primary">Kirim</button>
					</span>
				</form>
			</div>
		</div>

		<!-- Button Scroll to Top -->
		<a onclick="scrollToTop()" id="myBtn"><i class="fa-solid fa-circle-up"></i></a>
	</main>

	<!-- Footer -->
	<footer class="text-center pt-3 pb-3">
		<p class="mb-0">© 2023 | Created with <i class="fa fa-heart" style="color: red"></i> by <a href="https://www.instagram.com/rayhan.frdh/" class="fw-bold text-decoration-none">Rayhan F</a></p>
	</footer>
	<!-- Footer End -->

	<script src="{{ asset('rayfa-tech/js/main.js') }}"></script>

	{{-- Bootstrap JS --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>