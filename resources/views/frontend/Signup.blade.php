<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>


  {{-- @include("fronted.includes.header-script") --}}
  @include("backend.includes.header-script")


</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/signup" class="h1">Signup</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership on Electro </p>

      @if(session()->has('added'))
                <div class="alert alert-success">
                    {{ session()->get('added') }}
                </div>
      @endif

      <form action="{{route('admin-signup')}}" enctype="multipart/form-data" method="POST">

      @csrf
        <div class="input-group mb-3">
          <input name="fullname" type="text" class="form-control" placeholder="Full name" value="{{old('fullname')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>



        </div>

        @error('fullname')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>
        @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
         <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
          <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

        </div>
        @error('re-password')
         <div class="text-danger mt-1">{{ $message }}</div>
      @enderror


        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-block btn-primary">Register</button>
          </div>
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>

      </div>


      <a href="/signin" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
@include("frontend.includes.footer-script")


</body>
</html>
