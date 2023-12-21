<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Pemesanan</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssuser/carapemesanan.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
    <!-- Brand App -->
    <div class="ps-5 mb-4 pt-2">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <p class="textAniqah m-0">Aniqah Collection</p>
                <p class="deskripsiBrand fs-5 fst-italic fw-light m-0">Tempat Penyewaan Baju Bodo</p>
            </div>

            <!-- Tombol Login dan Registrasi atau Nama Pengguna -->
            <div style="margin-right: 50px;">
                @guest <!-- Cek apakah pengguna belum login -->
                    <button class="btn me-2" style="background-color: #BBD6B8">
                        <a href="/register" class="text-decoration-none" style="color: #000000;">Daftar</a>
                    </button>
                    <button class="btn" style="background-color: #BBD6B8">
                        <a href="/login" class="text-decoration-none" style="color: #000000;">Masuk</a>
                    </button>
                @else <!-- Jika pengguna sudah login -->
                    <button class="btn">
                        <a href="/profil" class="text-decoration-none" style="color: #000000;">Selamat datang, {{ Auth::user()->name }}</a>
                    </button>
                @endguest
            </div>
        </div>
    </div>
    <!-- end Brand App -->

    <!-- Menu App -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/carapemesanan">Cara Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <!-- End Menu App -->

    <!-- Tata Cara Pemesanan -->
    <div class="judul text-center py-4">
        <h1>TATA CARA PEMESANAN</h1>
    </div>
    
    <div class="row">
            @foreach($carapesan as $pesan)
            <div class="col-md-6">
                <div class="row">
                    <div class="col-3 col-md-3">
                        <div class="rounded-card">
                            <p class="custom-text" id="step1">{{ $pesan->no }}</p>
                        </div>
                    </div>
                    <div class="col-9 col-md-9">
                        <div class="custom-card">
                            <div class="card-body" style="text-align: start; max-width: 300px; height: 200px;">
                                <p class="card-text" id="step1">{{ $pesan->step }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- End Tata Cara Pemesanan -->

    <!-- FootNote -->
    <div class="footNote">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="aboutUs">About Us</h3>
                    <hr class="bold-hr">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare cursus sed nunc eget dictum Sed ornare cursus sed nunc eget dictumd nunc eget dictum Sed ornare cursus sed nunc eget dictum </p>
                    <a href="https://www.instagram.com/aniqahcollectionn/" class="text-decoration-none" target="blank" style="color: #000000">
                    <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://www.facebook.com/inha.jiun" class="text-decoration-none" target="blank" style="color: #000000">   
                    <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=+6285299581471" class="text-decoration-none" target="blank" style="color: #000000">
                    <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid black;"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Foot Note -->

    <!-- link -->
   <!-- link -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
