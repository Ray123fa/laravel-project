<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RayfaTech. {{ $title }}</title>
	<link rel="shortcut icon" href="{{ asset('rayfa-tech/favicon.ico') }}">

	@include('rayfatech/partials.styling')
	<link rel="stylesheet" href="{{ asset('rayfa-tech/css/master.css') }}">
	@yield('css')
	<script src="{{ asset('rayfa-tech/js/master.js') }}"></script>
</head>

<body>
	<div class="d-flex">
		<div id="sidebar" class="sidebar navbar-dark d-flex flex-column flex-shrink-0 p-3 min-vh-100 position-fixed show" style="z-index: 1000">
			<a href="#" class="d-flex align-items-center me-md-auto">
				<span class="brand fs-4 fst-italic fw-bold">RayfaTech.</span>
			</a>
			<hr class="my-2" style="color: antiquewhite">
			<ul class="nav nav-pills flex-column mb-auto">
				<li class="nav-item">
					<a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
						<i class="bi bi-house"></i>
						Beranda
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('catalog') }}" class="nav-link {{ request()->routeIs('catalog') ? 'active' : '' }}">
						<i class="fas fa-list"></i>
						Katalog
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('cart') }}" class="nav-link {{ request()->routeIs('cart') ? 'active' : '' }}">
						<i class="bi bi-basket"></i>
						Keranjang
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('shop') }}" class="nav-link {{ request()->routeIs('shop') ? 'active' : '' }}">
						<i class="bi bi-cart"></i>
						Pesanan
					</a>
				</li>
			</ul>
			<hr style="color: antiquewhite">
			<div class="dropdown">
				@auth
					<a href="#" class="user fs-6 d-flex align-items-center dropdown-toggle fw-bold justify-content-center" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-person-circle me-1 fs-5"></i>{{ Auth::user()->name }}
					</a>
					<ul class="dropdown-menu dropdown-menu-dark text-small shadow">
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li><hr class="my-1" style="color: antiquewhite"></li>
						<li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
					</ul>
				@else
					<a href="{{ route('login') }}" class="user fs-6 d-flex align-items-center fw-bold justify-content-center">
						<i class="fa fa-sign-in me-1 fs-5"></i>Login
					</a>
				@endauth
			</div>
		</div>

		<div class="wrapper">
			<nav class="navbar navbar-dark navbar-expand-md shadow-md fixed-top" style="z-index: 1">
				<div class="container-fluid">
					<div id="toggle">
						<button type="button" class="btn btn-outline-secondary" onclick="toggleMenu()">
							<i class="fa-solid fa-bars-staggered"></i>
						</button>
					</div>
				</div>
			</nav>

			<div class="content pt-3 ps-3">
				@yield('content')

				<!-- Button Scroll to Top -->
				<a id="myBtn" onclick="scrollToTop()"><i class="fas fa-circle-up"></i></a>
			</div>
		</div>
	</div>

	{{-- Bootstrap JS --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>