<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin Product</title>

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
    <div class="container">
        <div class="row brandApp">
            <div class="col-md-11 col-12 Aniqah" style="margin-top: -30px; margin-bottom: -40px;">
                <h1 class="textAniqah">Aniqah Collection</h1>
                <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
            </div>
            <div class="col-md-1 col-12" style="text-align: right;">
                <button id="editButton" type="button" class="btn btn-light" data-toggle="modal" data-target="#editModal">
                    <i class="fas fa-plus fa-3x"></i>
                </button>
            </div>
         </div>
    </div>
    <!-- end Brand App -->

    <!-- Modal Add Produk-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #BBD6B8">
                    <h5 class="modal-title" id="exampleModalLabel">Aniqah Collection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right:10px;"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi di sini -->
                    <h3 class="h3Lokasi">Tambahkan Produk</h3>
                    <form class="mx-auto" style="max-width: 700px;" action="/adminproduk" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="inputKodeBaju" class="col-sm-3 col-form-label">Kode Baju</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kodeBaju" name="kodeBaju" autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDeskripsi" class=" col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputFoto" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="foto" name="foto">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputKategori" class="col-sm-3 col-form-label">Kategori Baju</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="kategoriBaju" name="kategoriBaju" aria-label="Default select example">
                                    <option selected>Pilih Kategori</option>
                                    <option value="1">Dewasa</option>
                                    <option value="2">Anak</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputS&K" class=" col-sm-3 col-form-label">Syarat & Ketentuan</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="syaratKetentuan" name="syaratKetentuan" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputHarga" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="harga" name="harga">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputJumlahStok" class="col-sm-3 col-form-label">Jumlah Stok</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="jumlahStok" name="jumlahStok">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="offset-sm-10">
                                <button type="submit" class="btn btn-success" id="submit" href="/adminlokasi">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
    <!-- End Modal Add Produk-->

     <!-- Menu App -->
     <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/adminpesanan">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/adminproduk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adminlokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admintestimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admincarapemesanan">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adminjahitbaju">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Search -->
    <br>
    <div class="container">
        <form class="d-flex" role="search">
            <div style="position: relative; width: 100%;">
                <i class="fa fa-search" style="position: absolute; left: 10px; top: 10px; color: #777;"></i>
                <input class="form-control" type="search" placeholder="Search in here" aria-label="Search" style="background-color: #D9D9D9; text-align: center;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search in here'">
            </div>
        </form>
    </div>
    <!-- End Search -->

    <!-- produk -->
    <div class="container text-center">
    <div class="row align-items-start">
        @foreach($clothes as $clothing)
            <div class="col">
                <div class="card" style="background-color: #BBD6B8; padding:10px">
                    <div class="card-body" style="text-align :start;">
                        <h5 class="card-title">{{ $clothing->kode_baju }}</h5>
                        <p class="card-text">{{ $clothing->deskripsi }}</p>
                        <p class="card-text"><small class="text-body-secondary">apaaja</small></p>
                    </div>
                    <div class="container" style="background-color: #F4EEEE; padding:20px ;">
                        <img src="{{ $clothing->foto }}" class="card-img-bottom" alt="...">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    <!-- End Produk -->
  
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
