<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <!-- <link rel="stylesheet" href="css/cssuser/jahitbaju.css"> -->
    <link rel="stylesheet" href="css/cssuser/ubahprofil.css">
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

            <div class="row">
                <h2 class="textTitle">Profil Saya</h2>
                <p class="description">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun.</p>
            </div>

            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>

                <label for="telpon">Nomor Telpon:</label>
                <input type="tel" id="telpon" name="telpon" placeholder="Masukkan nomor telpon" required>
            </form>

            <div class="text-container">
                <div class="top-left">
                    <p style="font-weight: bold;">Gender</p>
                </div>
                <div class="top-right">
                    <p style="font-size: 10px;">- Untuk personalisasi akun</p>
                </div>
                <div class="bottom-left">
                    <p><i class="fa-regular fa-circle"></i> Pria</p>
                </div>
                <div class="bottom-right">
                    <p><i class="fa-regular fa-circle"></i> Wanita</p>
                </div>
            </div>

            <div class="edit">
                <div class="custom-button">
                    <p style="font-size: 20px; font-family: 'Inter-ExtraBold'; color: #618264; text-align: center; margin-top: 13px;">
                        Edit Profil
                    </p>
                </div>
            </div>

        </div>

        <!-- Kolom 3 -->
        <div class="column">
            <div class="row">Baris 1 (Kolom 3)</div>

            <div class="profile-picture2"></div> 

            <p style="margin-top: 15px; text-align: center; font-weight: bold; font-size: 20px">Isty hamdayani</p>
            <p style="text-align: center;">Since at 25 November 2023</p>

            <div class="logout">
                <div class="custom-button secondary">
                    <p style="font-size: 20px; font-family: 'Inter-ExtraBold'; color: #b44931; text-align: center; margin-top: 13px;">
                        Log Out
                    </p>
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
