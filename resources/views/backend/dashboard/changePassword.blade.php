
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
        
        @if(session()->has('current_password_mismatch'))
        <div class="alert alert-danger">
            {{ session()->get('current_password_mismatch') }}
        </div>
      @endif


      @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
      @endif
    
        
        <form action="{{ route('change-password') }}" method="POST">
          @csrf
        <div class="input-group mb-3">
            <input name="current_password" type="password" class="form-control" placeholder="Current Password" >
            <span class="input-group-text">
              <i class="bi bi-lock-fill"></i>
              
            </span>
            
          </div>

          @error('current_password')
              {{ $message }}
              @enderror
          <div class="input-group mb-3">
            <input name="password" type="password" class="form-control" placeholder="New Password" >
            <span class="input-group-text"> 
              <i class="bi bi-lock-fill"></i>
            </span>

           
          </div>

          @error('password')
          {{ $message }}
        @enderror
          <div class="input-group mb-3">
            <input type="password"  name="password_confirmation" class="form-control" placeholder="Re-type Password" >
            <span class="input-group-text">
              <i class="bi bi-lock-fill"></i>
            </span>
        
          </div>
          @error('confirm_password')
          {{ $message }}
        @enderror
          <button type="submit" class="btn btn-primary w-100 mb-3">change</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
