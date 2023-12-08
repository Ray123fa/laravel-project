<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RayfaTech. || Dashboard</title>
	<link rel="shortcut icon" href="{{ asset('rayfa-tech/favicon.ico') }}">

	@include('rayfatech/partials.styling')
	<link rel="stylesheet" href="{{ asset('rayfa-tech/css/dashboard.css') }}">
	<script src="{{ asset('rayfa-tech/js/dashboard.js') }}"></script>
</head>

<body onload="setMargin()">
	<div class="d-flex">
		<div id="sidebar" class="sidebar d-flex flex-column flex-shrink-0 p-3 min-vh-100 col-lg-2 position-fixed">
			<a href="#" class="d-flex align-items-center me-md-auto">
				<span class="brand fs-4 fst-italic fw-bold">RayfaTech.</span>
			</a>
			<hr class="my-2" style="color: antiquewhite">
			<ul class="nav nav-pills flex-column mb-auto">
				<li class="nav-item">
					<a href="#" class="nav-link active" aria-current="page">
						<i class="bi bi-house"></i>
						Home
					</a>
				</li>
				<li>
					<a href="#" class="nav-link">
						<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
						Dashboard
					</a>
				</li>
				<li>
					<a href="#" class="nav-link">
						<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
						Orders
					</a>
				</li>
				<li>
					<a href="#" class="nav-link">
						<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
						Products
					</a>
				</li>
				<li>
					<a href="#" class="nav-link">
						<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
						Customers
					</a>
				</li>
			</ul>
			<hr style="color: antiquewhite">
			<div class="dropdown">
				<a href="#" class="user fs-6 d-flex align-items-center dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="bi bi-person-circle me-1 fs-5"></i>
					{{ Auth::user()->name }}
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow">
					<li><a class="dropdown-item" href="#">Profile</a></li>
					<li><hr class="my-1" style="color: antiquewhite"></li>
					<li><a class="dropdown-item" href="#">Sign out</a></li>
				</ul>
			</div>
		</div>

		<div class="wrapper min-vw-100">
			<nav class="navbar navbar-dark navbar-expand-md position-fixed min-vw-100">
				<div class="container-fluid">
					<button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleMenu()">
						<i class="fa-solid fa-bars" id="toggle"></i>
					</button>
				</div>
			</nav>

			<div class="content container-fluid p-3">
				<h3>Welcome, {{ Auth::user()->name }}</h3>
			</div>
		</div>
	</div>

	{{-- Bootstrap JS --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>