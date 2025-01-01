


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


<!-- Right Section: Password Change -->
<div class="col-md-5">
  <div class="card card-outline card-primary">
    <div class="card p-4 shadow-sm">

    <div class="card-header text-center">
        <a  class="h1">Change Password</a>
      </div>
      <div class="card-body text-center">

        <form>
        <div class="input-group mb-3">
            <input name="current_password" type="password" class="form-control" placeholder="Current Password" required>
            <span class="input-group-text">
              <i class="bi bi-lock-fill"></i>
            </span>
          </div>
          <div class="input-group mb-3">
            <input name="new_password " type="password" class="form-control" placeholder="New Password" required>
            <span class="input-group-text">
              <i class="bi bi-lock-fill"></i>
            </span>
          </div>
          <div class="input-group mb-3">
            <input type="confirm_password" class="form-control" placeholder="Re-type Password" required>
            <span class="input-group-text">
              <i class="bi bi-lock-fill"></i>
            </span>
          </div>
          <button type="submit" class="btn btn-primary w-100 mb-3">Change Password</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
