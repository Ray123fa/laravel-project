<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RayfaTech || Register</title>
  <link rel="shortcut icon" href="{{ asset('rayfa-tech/favicon.ico') }}">

  {{-- Styling --}}
  @include('rayfatech/partials.styling')
  <link rel="stylesheet" href="{{ asset('rayfa-tech/css/auth.css') }}">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <main class="form-auth w-100 m-auto text-center">
		<h1 class="h3 mb-3 fw-normal">REGISTRATION</h1>
		
		@if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
      </div>
    @endif

    @if(Session::has('error'))
      <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }}
      </div>
    @endif

    <form method="POST" action="/rayfatech/register">
			@csrf
			<div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingName" placeholder="Alexander John" name="name" required value="{{ old('name') }}">
        <label for="floatingName">Nama</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
			<div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingUsn" placeholder="rayhanf16" name="username" required value="{{ old('username') }}">
        <label for="floatingUsn">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingMail" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
        <label for="floatingMail">Email</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
        <label for="floatingPassword">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Register</button>
      <span class="text-muted" style="text-align: left">Sudah punya akun? <a href="login">Login</a></span>
      <p class="mt-3 text-body-secondary">© RayfaTech. 2023</p>
    </form>
  </main>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>