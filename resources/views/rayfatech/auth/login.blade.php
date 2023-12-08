<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RayfaTech || Login</title>
  <link rel="shortcut icon" href="{{ asset('rayfa-tech/favicon.ico') }}">

  {{-- Styling --}}
  @include('rayfatech/partials.styling')
  <link rel="stylesheet" href="{{ asset('rayfa-tech/css/auth.css') }}">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <main class="form-auth w-100 m-auto text-center">
    <h1 class="h3 mb-3 fw-normal">SIGN IN</h1>

    @if(Session::has('success'))
      <div class="alert alert-success ps-0 pe-0" role="alert">
        {{ Session::get('success') }}
      </div>
    @endif

    @if(Session::has('error'))
      <div class="alert alert-danger ps-0 pe-0" role="alert">
        {{ Session::get('error') }}
      </div>
    @endif

    <form method="POST" action="/rayfatech/login">
      @csrf
      <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="rayhanf16" name="username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
        <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Ingat saya
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Sign in</button>
      <span class="text-muted" style="text-align: left">Belum punya akun? <a href="register">Register</a></span>
      <p class="mt-3 text-body-secondary">© RayfaTech. 2023</p>
    </form>
  </main>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>