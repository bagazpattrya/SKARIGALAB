<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SKARIGA LAB | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>


<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <div class="top-nav-bar">
                    <div class="row">
                        <div class="col-6 test-nav-bar ">
                            <div class="nav-bar-icon">
                                <i class="bi bi-wrench-adjustable-circle"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <a class="navbar-brand" href="#">SKARIGA LAB</a>
                        </div>
                    </div>
                </div>
                
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
            </div>
          </nav>
          <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    @if (Auth::user()->role_id == 2)
                        {{--<li>
                            <a href="#">Dashboard</a></li>
                        <li>
                            <a href="#">Barang</a>
                        </li>
                        <li>Categories</li>
                        <li>Users</li>
                        <li>Log Peminjaman</li>
                        <li>Logout</li>--}}
                        <a href="dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
                        <a href="barang" @if(request()->route()->uri == 'barang') class='active' @endif>Barang</a>
                        <a href="category" @if(request()->route()->uri == 'category') class='active' @endif>Categories</a>
                        <a href="user" @if(request()->route()->uri == 'user') class='active' @endif>Users</a>
                        <a href="rent-log" @if(request()->route()->uri == 'rent-log') class='active' @endif>Log</a>
                        <a href="logout">Logout</a>
                    @else
                        <li>Profile</li>
                        <li>Logout</li>
                    @endif
                </div>
                <div class="content p-5 col-10">
                    @yield('content')
                </div>
            </div>
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>