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
          <a  class="h1">Your Profile</a>
        </div>
        <div class="card-body">
          @if(session()->has('update_success'))
            <div class="alert alert-success">
                {{ session()->get('update_success') }}
            </div>
          @endif
          
          @if(session()->has('update_fail'))
            <div class="alert alert-danger">
                {{ session()->get('update_fail') }}
            </div>
          @endif
          
          <form action="{{ route('upload-profileImg') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="rounded-circle overflow-hidden border border-primary d-flex align-items-center justify-content-center"
                 style="width: 150px; height: 150px; margin: auto;">
                @if($admin->image)
                <img src="{{ asset('storage/' . $admin->image) }}" alt="image" class="img-fluid" id="profileImage">
                @else
                    <i class="bi bi-image text-primary" style="font-size: 3rem;" id="placeholderIcon"></i>
                @endif
            </div>
            <div class="text-center mt-3">
                <div class="input-group">
                    <input type="file" id="fileInput" class="form-control" name="image" aria-label="Upload">
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-warning">Save Picture</button>
        </form>
        

         

           

          <form action="{{ route('admin-update-profile') }}" method="POST" >
            {{-- {{ csrf_field() }}  --}}
            @csrf
            
            <div class="text-center">
             
            
            <div class="mt-3"></div>
            <div class="input-group mb-3"> 
              <input type="text" class="form-control" name="fullname" placeholder="Full name" value="{{ $admin->fullname }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>

                @error('fullname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" value="{{  $admin->email }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            
            <button type="submit" class="btn btn-block btn-primary">Update</button>
            <a href="#" class="btn btn-block btn-danger">Back</a>
          </form>
        
        </div>
      </div>
      <a href="/edit-password" class="btn btn-block btn-success">Change Password</a>
    </div>

   

@endsection
