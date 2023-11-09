<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

        <!-- Link Bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Link CSS -->
        <link rel="stylesheet" href="css/cssuser/homepage.css">
        <!-- link font awesome -->
        <script src="https://kit.fontawesome.com/034fd836ff.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>

        <!-- Menggunakan Bootstrap 5.2.2 JavaScript dari CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

        <!-- link font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />


</head>
<body>
    <!-- Brand App -->
    <div class="brandApp">
        <div class="Aniqah" style="margin-top: 20px;">
            <h1 class="textAniqah">Aniqah Collection</h1>
            <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
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
                        <a class="nav-link fw-bold" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/carapemesanan">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahitbaju">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Carousel -->
    <div class="wrapper">
        <div class="hero">
            <div class="inner-wrapper">
                <div class="row row-cols-2 mt-0">
                    <div class="col-md-6">
                        <div class="header-left">
                            <h1 class="header-text">Welcome to Aniqah Collection</h1>
                            <p class="header-desc">Pilihan yang tepat untuk tampil memukau di hari spesial anda</p>
                            
                            <div class="buttonHeader">
                                <a href="/product" class="btn btn-outline-dark fw-bold" id="btn-Header">Check it now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="foto/baju2-removebg.png" alt=""> 
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- End Carousel -->

    <!-- Preview Products -->
    <div class= "container-fluid py-5">
        <div class="container">
            <h2 class= "text-center" style="font-family: 'Corinthia-Bold';">Most Popular Collections</h2>
            <div class="line"></div> <!-- Tambahkan elemen dengan kelas "line" -->
            
            <div class="row" id="itemProduct">
                <div class="col-4">
                    <img src="foto/baju4.jpg" class="img" alt="...">
                    <p class="text-center fw-bold">Baju Bodo</p>
                </div>

                <div class="col-4">
                    <img src="foto/baju5.jpg" class="img" alt="...">
                    <p class="text-center fw-bold">Baju Bodo</p>
                </div>

                <div class="col-4">  
                    <img src="foto/baju6.jpg" class="img" alt="...">
                    <p class="text-center fw-bold">Baju Bodo</p>
                </div>

                <div class="center-button">
                    <a href="/product" class="btn btn-outline-dark fw-bold" id="btn-SeeMore">See More -></a>
                </div>

            </div>
        </div>
    </div>

    <!-- End Cards -->

    <!-- Layanan -->

    <div class="container fluid layanan pt-5 pb-5">
        <div class="container text-center">
            <h3 class = "display-4" id= "layanan">Why Us?</h3>
            <div class="row">
                <div class="col-3">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div class="itemwhyus">
                            <i class="fa-solid fa-check fa-2x"></i>
                        </div>
                        <h5 class="title mb-4">Kualitas Terjamin</h5>
                        <small class="desc-product">Kualitas selalu menjadi prioritas utama kami</small>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div class="itemwhyus">
                            <i class="fa-solid fa-wand-magic-sparkles fa-2x"></i>
                        </div>
                        <h5 class= "title mb-4">Desain Kostum</h5>
                        <small class="desc-product">Anda memiliki kebebasan untuk merancang pakaian sesuai dengan selera dan gaya Anda </small>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div class="itemwhyus">
                            <i class="fa-solid fa-dollar-sign fa-2x"></i>
                        </div>
                        <h5 class= "title mb-4">Harga Terjangkau</h5>
                        <small class="desc-product">Anda akan menemukan berbagai pilihan pakaian yang cocok dengan anggaran Anda</small>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div class="itemwhyus">
                            <i class="fa-solid fa-cart-shopping fa-2x"></i>
                        </div>
                        <h5 class= "title mb-4">Pilihan Yang Bervariasi</h5>
                        <small class="desc-product">Menyediakan beragam pilihan fashion yang tak terbatas</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Layanan -->

     <!-- FootNote -->
    <div class="footNote">
        <div class="row">
            <div class="col" style="margin-right: 20px;">
                <h3 class="aboutUs">About Us</h3>
                <hr class="bold-hr" style="border: 2px solid black;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare cursus sed nunc eget dictum  Sed ornare cursus sed nunc eget dictumd nunc eget dictum  Sed ornare cursus sed nunc eget dictum </p>
                <i class="fab fa-instagram fa-2x"></i>
                <i class="fab fa-facebook fa-2x"></i>
                <i class="fab fa-whatsapp fa-2x"></i>
            </div>
            <div class="col" style="margin-left: 20px;">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid black;"></textarea>
                    <button class="btn-send mt-3">Send</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Foot Note -->

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>