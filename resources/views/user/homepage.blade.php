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
    <nav class="navbar navbar-expand-sm costom-navbar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lokasi">Lokasi</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/testimoni">Testimoni</a>
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
    <!-- End Menu App -->

    <!-- Carousel -->
    
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="foto/baju1.jpg" alt="Image 1" class="d-block w-100" style="width: 100%; height: 100%;">
                <div class="carousel-caption position-absolute top-50 start-0 translate-middle-y">
                    <h2>Slide 1</h2>
                    <p>This is the first slide. It contains some text that goes here.</p>
                    <a href="produk" class="btn btn-primary position-absolute top-50 start-0 translate-middle-y">Check It Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="foto/sagebg.jpg" alt="Image 2" class="d-block w-100" style="width: 100; height: 100;">
                <div class="carousel-caption position-absolute top-50 start-0 translate-middle-y">
                    <h2>Slide 2</h2>
                    <p>This is the second slide. More text can go here.</p>
                    <a href="#" class="btn btn-primary position-absolute top-50 start-0 translate-middle-y">Check It Now</a>
                </div>
            </div>
        </div>

        <!-- Controls (previous/next) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- Preview Products -->
    <div class= "container-fluid py-5">
        <div class="container">
            <h2 class= "text-center mb-5">Most Popular Products</h2>
            
            <div class="row">
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
                        <a href="" class="btn btn-outline-dark auto-width-button fw-bold">See More -></a>
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
                <i class="fa-solid fa-check fa-3x mb-4"></i>
                <h5 class= "title mb-4">Kualitas Terjamin</h5>
                <p class="desc-product">Kualitas selalu menjadi prioritas utama kami </p>
            </div>
            <div class="col-3">     
                <i class="fa-solid fa-wand-magic-sparkles fa-3x mb-4"></i>
                <h5 class= "title mb-4">Desain Kostum</h5>
                <p class="desc-product">Anda memiliki kebebasan untuk merancang pakaian sesuai dengan selera dan gaya Anda </p>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-dollar-sign fa-3x mb-4"></i>
                <h5 class= "title mb-4">Harga Terjangkau</h5>
                <p class="desc-product">Anda akan menemukan berbagai pilihan pakaian yang cocok dengan anggaran Anda, menjadikan tampilan yang stylish lebih mudah diakses bagi semua orang</p>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-cart-shopping fa-3x mb-4"></i>
                <h5 class= "title mb-4">Pilihan Yang Bervariasi</h5>
                <p class="desc-product">Menyediakan beragam pilihan fashion yang tak terbatas untuk memenuhi segala kebutuhan gaya Anda untuk tampil memukau di acara terbaik anda</p>
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
                <button class="buttonAdmin" style="bacground-color:black;">ADMIN</button>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid black;"></textarea>
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