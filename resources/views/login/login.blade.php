<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('font/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Login - Recycle Hub</title>
</head>
<body>

<div class="container-lgn">
    <div class="login-container">
      <h2>Login</h2>
      <form action="#" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label"></label>
          <input type="email" class="form-control" id="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label"></label>
          <input type="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <div class="form-check mb-3">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember password</label>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-3">LOGIN</button>
      </form>
      <div class="text-center mt-4">
      <a href="#" class="btn btn-outline-light">
        <i class="bi bi-arrow-left"></i>
      </a>
    </div>
    </div>
  </div>

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
