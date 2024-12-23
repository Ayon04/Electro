<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User | Log in</title>
  @include("backend.includes.header-script")
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Electro</b> Login</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to Electro</p>

      <!-- Display general error message -->
      @if($errors->has('general'))
        <div class="alert alert-danger">
          {{ $errors->first('general') }}
        </div>
      @endif

      <form action="{{route('admin-signin')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <!-- Email field -->
        <div class="input-group mb-3">
          <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Email"
            value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <div class="text-danger mt-1">{{ $message }}</div>
        @enderror

        <!-- Password field -->
        <div class="input-group mb-3">
          <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
          <div class="text-danger mt-1">{{ $message }}</div>
        @enderror

        <!-- Remember me and submit button -->
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <p class="mb-1">
        <a href="/forget-password">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="/signup" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
</div>
@include("backend.includes.footer-script")
</body>
</html>
