<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pesanan</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <!-- <link rel="stylesheet" href="css/cssuser/jahitbaju.css"> -->
    <link rel="stylesheet" href="css/cssuser/statuspesanan.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>

    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>Layout Kolom dan Baris</title>

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
                        <a class="nav-link fw-bold" href="/profil">Home</a>
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
                        <a class="nav-link" href="/crapemesanan">Cara Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Kolom 1 -->
        <div class="column">
            <div class="profile-grid">
                <div class="profile-picture"></div>
                    <div class="profile-text">
                        <div class="username">isty.15</div>
                        <div>
                            <i class="fa-solid fa-pencil"></i>Ubah Profile
                        </div>
                    </div>
            </div>
            
            <div class="akun">
                <i class="fa-regular fa-user"></i>
            <div>Akun Saya</div>

        </div>

        </div>    

        <!-- Kolom 2 -->
        <div class="column">

            <div class="table-container">
                <div class="table-header">
                    <h2>Judul Tabel</h2>
                </div>
                <div class="table-content">
                    <div class="color-box"></div>
                    <div class="text-info">
                        <ul>
                            <li style="font-size: 25px;">Sedang Diproses</li>
                            <li>A201</li>
                            <li>Rp 20.000</li>
                        </ul>
                    </div>
                    <button class="cancel-button">Batalkan Pesanan</button>
                </div>

                <div class="table-content">
                    <div class="color-box"></div>
                    <div class="text-info">
                        <ul>
                            <li style="font-size: 25px;">Status Pesanan</li>
                            <li>Nama Pesanan</li>
                            <li>Harga</li>
                        </ul>
                    </div>
                    <button class="cancel-button">Batalkan Pesanan</button>
                </div>

                <div class="table-content">
                    <div class="color-box"></div>
                    <div class="text-info">
                        <ul>
                            <li style="font-size: 25px;">Staus Pesanan</li>
                            <li>Nama Pesanan</li>
                            <li>Harga</li>
                        </ul>
                    </div>
                    <button class="cancel-button">Batalkan Pesanan</button>
                </div>

                <div class="table-content">
                    <div class="color-box"></div>
                    <div class="text-info">
                        <ul>
                            <li style="font-size: 25px;">Status Pesanan</li>
                            <li>Nama Pesanan</li>
                            <li>Harga</li>
                        </ul>
                    </div>
                    <button class="cancel-button">Batalkan Pesanan</button>
                </div>

            </div>


        </div>

    </div>

    <!-- End Menu App -->

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

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->

</body>
</html>
