<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/user/style.css')}}">
    <title>Yuki Travel</title>
    <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
</head>

<body>
    <!-- Navabar -->
    <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <img class="nav-img" src="{{asset('assets/images/logo.png')}}" alt="">
            <a class="navbar-brand fs-4 ms-2" onclick="home()" href="#home">YukiTravel.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home" onclick="home()">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" onclick="about() ">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destination" onclick="destination() ">Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cardPackage" onclick="PackageTravel()">Travel Package</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border-light" onclick="setTheme(true)">Light</button>
                        <button type="button" class="btn btn-dark border-light" onclick="setTheme(false)">Dark</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center" id="home">
        
        <h1 id="head-text">Yuki Travel.</h1>
        <h4 id="head-desc">Your travel companion.</h4>
        <a class="btn btn-primary btn-lg" id="btn-get-started" href="#about" role="button">Get Started</a>
    </div>
    <div class="container text-center" id="about">
        <h2 class="title" id="title-about">About Me</h2>
        <img class="img-fluid mt-3 mb-2" src="assets/images/logo.png" alt="" width="200px" id="img-logo">
        @foreach ($profiles as $item)
            
        <p class="p-about mt-3">
            {{$item->description_company}}
        </p>
        @endforeach
        
    </div>
    <div class="container justify-content-lg-center" id="destination">
        <h2 class="title" id="title-destination">Destination</h2>
        <img src="{{asset('assets/images/destinasi.jpg')}}" class="img-fluid" alt="Destination" >
        
    </div>

        <div class="container" id="content">
            <h2 class="title mb-3" id="cardPackage">Travel Package</h2>
            @if ($packages->isEmpty())
            <div class="card">
                <div class="card-body text-center">
                  Sorry No Package Avaliable
                </div>
              </div>
            @else   
                @foreach ($packages as $package)  
                <!-- Card -->
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col" id="col-card">
                    <div class="card mb-3">
                        <img src="{{$package->url_photo}}" class="card-img-top" alt="image">
                        <div class="card-body">
                        <h5 class="card-title">{{$package->package_name}}</h5>
                        <p class="card-text">{{$package->description}}</p>
                        <h5 >Fasilitas</h5>
                        <p class="ms-3">{{$package->facilities}}</p>
                        <h5 class="mt-3">Rp. {{$package->price}}</h5>
                        <a href="https://api.whatsapp.com/send?phone=6282244098257&text=Halo,%20saya%20ingin%20memesan%20tiket%20ke%20{{$package->package_name}}%20apakah%20bisa?" 
                        class="btn btn-primary">Book Nows</a>
                        </div>
                    </div>
                    </div> 
                </div>
                @endforeach
                {{-- end card --}}
            @endif 
        </div>
   
    <footer class="mt-3">
            © 2021 Copyright:
            <a class="text-white" href="#">Yuki Travel</a>
            
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>