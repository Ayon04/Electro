@extends("backend.layouts.admin")

@section("page_header")
    Admin Dashboard
@endsection

@section("page_li")
<li class="breadcrumb-item active">
    <a href="#">
       Admin Profile
    </a>
</li>
@endsection

@section("content")
<div class="container mt-5">
  <div class="row g-4">
    <!-- Left Section: Profile -->
    <div class="col-md-5">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="/signup" class="h1">Your Profile</a>
        </div>
        <div class="card-body">
          <form action="#" method="post">
            <div class="text-center">
              <div class="rounded-circle overflow-hidden border border-primary d-flex align-items-center justify-content-center"
                   style="width: 150px; height: 150px; margin: auto;">
                <i class="bi bi-image text-primary" style="font-size: 3rem;" id="placeholderIcon"></i>
                <img src="" alt="image" class="img-fluid d-none" id="profileImage">
              </div>
              <div class="text-center mt-3">
                <div class="input-group">
                  <input type="file" id="fileInput" class="form-control" aria-label="Upload">
                </div>
              </div>
            </div>
            <div class="mt-3"></div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Full name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </form>
          <div class="social-auth-links text-center mt-3">
            <a href="#" class="btn btn-block btn-primary">Update</a>
            <a href="#" class="btn btn-block btn-danger">Back</a>
          </div>
        </div>
      </div>
    </div>

    @include('backend.dashboard.changePassword')
@endsection
