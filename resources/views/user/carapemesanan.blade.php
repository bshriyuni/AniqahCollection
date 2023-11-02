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

    <script>
        let map;
        let marker;
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: {lat: -3.022163, lng:  120.212572},
                    zoom: 20,
                });

                // Buat marker dengan koordinat yang ditentukan
                marker = new google.maps.Marker({
                    position: { lat: -3.022163, lng: 120.212572 }, // Ganti dengan koordinat yang Anda inginkan
                    map: map,
                    title: "Lokasi yang Ditandai", // Ganti dengan judul marker Anda
                });
            }
    </script>

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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/crapemesanan">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahitbaju">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Tata Cara Pemesanan -->

   
        <div class="judul" style="margin-top: 20px;">
            <h1> TATA CARA PEMESANAN</h1>
        </div>

<div class="row">
    <div class="col-6 custom-card">
            <div class="row">
            <div class="col-8 ">
            <p class="custom-text" style="padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-4">
            <div class="rounded-card" style="padding: 20px;" style="margin-top: 20px;">
                <i class="fa-solid fa-lightbulb fa-4x" style="color: #fffafa;"></i>
            </div>
            </div>
        </div>
    </div>
    <div class="col-6">                    
        <div class="step">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #374F39">01</p>
        </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="step" style="margin-left:550px;">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #374F39">02</p>
        </div></div>

    <div class="col-6 custom-card2">
    <div class="row">
            <div class="col-8 ">
            <p class="custom-text" style="padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-4">
            <div class="rounded-card" style="padding: 20px;"  style="margin-top: 20px;">
                <i class="fa-solid fa-address-book fa-3x" style="color: #fffafa;"></i>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-6 custom-card3">
            <div class="row">
            <div class="col-8 ">
            <p class="custom-text" style="padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-4">
            <div class="rounded-card" style="padding: 30px;">
                <i class="fa-solid fa-dollar-sign fa-3x" style="color: #fffafa;"></i>
            </div>
            </div>
        </div>
    </div>
    <div class="col-6">                    
        <div class="step">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #374F39">03</p>
        </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="step" style="margin-left:550px;">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #374F39">04</p>
        </div></div>

    <div class="col-6 custom-card4">
    <div class="row">
            <div class="col-8 ">
            <p class="custom-text" style="padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-4">
            <div class="rounded-card" style="padding: 20px;" style="margin-top: 20px;">
                <i class="fa-solid fa-thumbs-up fa-3x" style="color: #fffafa;"></i>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-6 custom-card5">
            <div class="row">
            <div class="col-8 ">
            <p class="custom-text" style="padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-4">
            <div class="rounded-card" style="padding: 20px;" style="margin-top: 20px;">
                <i class="fa-solid fa-cart-shopping fa-3x" style="color: #fffafa;"></i>
            </div>
            </div>
        </div>
    </div>
    <div class="col-6">                    
        <div class="step">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #374F39">05</p>
        </div>
    </div>
  </div>
</div>
    </div>
  </div>


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</body>
</html>



