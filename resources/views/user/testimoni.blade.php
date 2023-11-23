<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>
    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssuser/testimoni.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
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
    <h1 class="custom-heading"><b>What they say?</b></h1>

    
    <div class="card-body">
        <div class="row">
        @foreach($testimonis as $testimoni)
        <div class="col-lg-4 col-6 mb-5">
            <!-- small box -->
            <div class="small-box custom-bg mx-auto rounded d-flex align-items-center">
                <div class="inner">
                    <img class="card-img-top img-fluid rounded" style="height: 350px; weight:100%" alt="" src="{{ asset('foto/' . $testimoni->gambar) }}" >
                </div>
            </div>
            <!-- /.small-box -->
        </div>
        @endforeach
                  <!-- ./col -->
        </div>
                        <!-- /.row -->
    </div>
                      <!-- /.card-body -->
    <!-- Menggunakan Bootstrap JS (Optional, tergantung kebutuhan Anda) -->
    
    <div class="container text-center">
        <div class="line-with-text">
            <div></div>
            <span>Review</span>
        </div>
    </div>
<br>
<br>
    <!-- Review -->
    <div class="container text-center review">
        <div class="row">
            <div class="colReview">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('foto/review1.jpeg') }}" alt="Gambar 1"  class="img-fluid rounded-image">
                        <h6>Mbak Adel</h6>
                    </div>
                    <div class="col-8" style="margin-top: 20px;" >Lorem ipsum is a placeholder text commonly used in the design and printing industry. It is a Latin looking text that has been used since the 16th century as a filler text when the final content is not yet available.</div>
                    <div class="container">
                        <span class="fas fa-star yellow-star"></span>
                        <span class="fas fa-star yellow-star"></span>
                        <span class="fas fa-star yellow-star"></span>
                        <span class="fas fa-star yellow-star"></span>
                        <span class="fas fa-star yellow-star"></span>
                        <span style="margin-left: 5px;"> 5 </span>
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