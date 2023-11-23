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
    <link rel="stylesheet" href="css/cssadmin/product.css" />
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
    <div class="row brandApp">
        <div class="Aniqah col-sm-11" style="margin-top: -40px; position: relative; margin-bottom: -100px">
            <h1 class="textAniqah">Aniqah Collection</h1>
            <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
        </div>
        
        <!-- tombol edit testimoni -->
        <div class="col-sm-1">
            <button type="button" class="btn btn-light" id="plustestimoni">
                <i class="fas fa-plus fa-3x" ></i>
            </button>
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
    <div class="container">
    <form class="d-flex" role="search" >
        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search" style="background-color: #D9D9D9;">
    </form>
    </div>

    <br>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px ">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px ;">
                    <img src="foto/foto1.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto2.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto3.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
        </div>
        <br>
        <div class="row align-items-start">
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto4.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto5.jpg" class="card-img-bottom" alt="..." >
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto6.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
        </div>
        <br>
        <div class="row align-items-start">
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px ">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px ;">
                    <img src="foto/foto1.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto2.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto3.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
        </div>
        <br>
        <div class="row align-items-start">
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto4.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto5.jpg" class="card-img-bottom" alt="..." >
                </div>
             </div>
            </div>
            <div class="col">
             <div class="card" style="background-color: #BBD6B8; padding:10px">
                <div class="card-body" style="text-align :start;">
                    <h5 class="card-title">Kode Baju</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                <div class="container" style="background-color: #F4EEEE; padding:20px">
                    <img src="foto/foto6.jpg" class="card-img-bottom" alt="...">
                </div>
             </div>
            </div>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
