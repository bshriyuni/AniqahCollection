<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>

    <!-- Link Bootstraps -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssuser/product.css" />
    <!-- link font awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('font') }}" />
    <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  </head>
  <body>
    <!-- Brand App -->
    <div class="brandApp">
      <div class="Aniqah" style="margin-top: 20px">
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
                        <a class="nav-link fw-bold" href="/product">Produk</a>
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
    <!-- End Menu App -->
    
    <br>
    <div id="most">
        <div class="container" style="background-color: #BBD6B8; width:60px height:80px;">
            <div class="container1" style="width: 40rem; height: 10rem; padding: 5px;">
                <div class="container2" style="width: 25rem; height: 10rem; padding: 5px;">
                    <img src="..." class="card-img-top" alt="...">
                </div>
                <div class="container3" style="width: 25rem; height: 10rem; padding: 5px;">
                    <img src="..." class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>

    <br> 
    <div id="product lainnya">
        <div class="row align-items-start">
            <div class="col">
            <hr>
            </div>
            <div class="col">
                <h1><center>Produk Lainnya</center></h1>
            </div>
            <div class="col">
            <hr>
            </div>
        </div>
    </div>

    <br>
    <div class="container text-center">
        <div class="row align-items-start">
            @foreach($clothes as $clothing)
            <div class="col col-4">
                <a href="/detailproduk/{id}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="background-color: #BBD6B8; padding:10px ">
                        <div class="card-body" style="text-align :start;">
                            <h5 class="card-title">{{ $clothing->kode_baju }}</h5>
                            <p class="card-text">{{ $clothing->deskripsi }}</p>
                            <h6>Rp {{$clothing->harga}}</h6>
                        </div>
                        <div class="container" style="background-color: #F4EEEE; padding:5px;">
                            <img src="{{ asset('foto/' . $clothing->gambar) }} {{ $clothing->foto }}" class="card-img-bottom" alt="..." style="height: 300px;">
                        </div>
                    </div>
                </a>
                <br><br>
            </div>
            @endforeach
        </div>
    </div>
  
    <br>
    <div class="container text-center">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="row">
                <div class="col" style="width: 40px; height: 40px;">
                    <img src="number/number-1.png" width="40px" height="40px" >
                </div>
                <div class="col" style="width: 40px; height: 40px;">
                    <img src="number/number-2.png" width="40px" height="40px" >
                </div>
                <div class="col" style="width: 40px; height: 40px;">
                    <img src="number/number-3.png" width="40px" height="40px" >
                </div>
                <div class="col" style="width: 40px; height: 40px;">
                    <img src="number/number-4.png" width="40px" height="40px" >
                </div>
                <div class="col" style="width: 40px; height: 40px;">
                    <img src="number/number-5.png"  width="40px" height="40px">
                </div>
                <div class="col" style="width: 40px; height: 40px;">
                    <img src="number/number-6.png"  width="40px" height="40px">
                </div>
            </div>
        </div>
        <div class="col"> </div>
    </div>
    </div>

    <br><nr>
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Foot Note -->

  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
