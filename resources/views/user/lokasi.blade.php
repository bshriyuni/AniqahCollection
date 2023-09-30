<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssuser/lokasi.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>

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
            <h1 class="textAniqah">Aniqah Collction</h1>
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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Lokasi</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Maps -->
    <div>
        <div id="map"></div>        
    </div>
    <!-- End Maps -->

    <!-- Detail Lokasi -->
    <div class="detail_lokasi">
        <div class="JudulDetailLokasi">
            <h3 class="detailLokasi">
                Detail Lokasi
            </h3>
        </div>
        <div class="logoHome">
            <i class="fas fa-home fa-9x"></i>
        </div>
        <div class="lokasi">
            <h6>Jln.Pemuda II. (Perumahan Fortuna Permai)</h6>
            <h6>Takkalala, Wara Selatan, Palopo City, South Sulawesi</h6>
            <h6>Indonesia</h6>
        </div>
    </div>
    <!-- End Detail Lokasi -->

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
</body>
</html>