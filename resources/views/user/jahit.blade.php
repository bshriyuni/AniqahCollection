<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jahit Baju</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssuser/jahitbaju.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>


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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lokasi</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Halaman Jahit Baju -->
    <div class="halamanJahit">
        <div class="title" style="margin-top: 20px;">
            <h1 class="textTitle">Custom Product</h1>
            <p class="description">Please customize it as you like.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                <div class="card" style="background-color: #DBE4C6; 
                border: 1px solid #ccc; 
                padding: 20px; 
                width: 300px; 
                height: 480px; 
                margin-top: 60px;
                border-top-left-radius: 200px; 
                border-top-right-radius: 200px;">
                    <div class="card-content">
                        <img src="gambar1.png">
                    </div>
                </div>
                <p style="margin-top: 10px; font-family: 'Inter-ExtraBold';">Engagement</p>
            </div>

            <div class="col" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                <div class="card" style="background-color: #BBD6B8; 
                border: 1px solid #ccc; 
                padding: 20px; 
                width: 410px; 
                height: 600px; 
                border-top-left-radius: 200px; 
                border-top-right-radius: 200px;">
                    <div class="card-content">
                        <p>Ini adalah konten card kedua.</p>
                    </div>
                </div>
                <p style="margin-top: 10px; font-family: 'Inter-ExtraBold';">Graduation</p>
            </div>
        
            <div class="col" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                <div class="card" style="background-color: #D6E8DB; 
                border: 1px solid #ccc; 
                padding: 20px; 
                width: 300px; 
                height: 480px; 
                margin-top: 60px;
                border-top-left-radius: 200px; 
                border-top-right-radius: 200px;">
                    <div class="card-content">
                        <p>Ini adalah konten card ketiga.</p>
                    </div>
                </div>
                <p style="margin-top: 10px; font-family: 'Inter-ExtraBold';">Bridesmaid</p>
            </div>
        
        </div>
    </div>

    <div class="custom-arrows">
        <i class="fas fa-arrow-left" style="font-size: 50px;"></i>
        <i class="fas fa-arrow-right" style="font-size: 50px;"></i>
    </div>

    <div class="order">
        <div class="card-content">
            <p style= "font-size: 18px; font-family: 'Inter-ExtraBold' ; color: #333; text-align: center; margin-top:13px;">Hubungi Penjahit</p>
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
</body>
</html>