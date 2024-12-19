<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield("title","Dashboard")</title>
    @include("backend.includes.header-script")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('adminAssets') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

 @include("backend.includes.header-nav")
 @include("backend.includes.admin-sidebar")
 
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield("page_header",'Dashboard')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              @yield("page_li")
            </ol>
          </div>
        </div>
      </div>
    </div>
        
    <section class="content">
      <div class="container-fluid">
    
        @yield("content") 
        
      </div>
    </section>
  </div>  
 @include("backend.includes.footer")

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
@include("backend.includes.footer-script")

@yield("js")
@yield("scripts")

</body>
</html>
