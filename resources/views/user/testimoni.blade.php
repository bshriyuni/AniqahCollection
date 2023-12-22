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
    <div class="ps-5 mb-4 pt-2">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <p class="textAniqah m-0">Aniqah Collection</p>
                <p class="deskripsiBrand fs-5 fst-italic fw-light m-0">Tempat Penyewaan Baju Bodo</p>
            </div>

            <!-- Tombol Login dan Registrasi atau Nama Pengguna -->
            <div style="margin-right: 50px;">
                @guest <!-- Cek apakah pengguna belum login -->
                    <button class="btn me-2" style="background-color: #BBD6B8">
                        <a href="/register" class="text-decoration-none" style="color: #000000;">Daftar</a>
                    </button>
                    <button class="btn" style="background-color: #BBD6B8">
                        <a href="/login" class="text-decoration-none" style="color: #000000;">Masuk</a>
                    </button>
                @else <!-- Jika pengguna sudah login -->
                    <button class="btn">
                        <a href="/profil" class="text-decoration-none" style="color: #000000;">Selamat datang, {{ Auth::user()->name }}</a>
                    </button>
                @endguest
            </div>
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
                        <a class="nav-link" href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/carapemesanan">Cara Pemesanan</a>
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
                <div class="small-box custom-bg mx-auto rounded">
                    <div class="inner text-center">
                        <img class="card-img-top img-fluid rounded" style="height: 450px;" alt="" src="{{ asset('foto/' . $testimoni->gambar) }}" >
                    </div>
                </div>
                <!-- /.small-box -->
            </div>
        @endforeach
    </div>
    <!-- /.row -->
</div>
    <!-- Menggunakan Bootstrap JS (Optional, tergantung kebutuhan Anda) -->
    
    <div class="container text-center">
        <div class="line-with-text">
            <div></div>
            <span>Review</span>
        </div>
    </div>
<br>
       

<div class="container text-center review">
    <div class="row">
        @foreach($comments as $comment)
            <div class="col-12 "> <!-- Reduce margin bottom for a more compact layout -->
                <div class="colReview p-1 shadow rounded w-100"> <!-- Reduce padding for a more compact layout -->
                    <div class="row align-items-center">
                        <div class="col-3"> <!-- Adjust the column size as needed, e.g., col-3 for a smaller width -->
                            <div class="profile-circle col-8 mx-auto" style="width: 100px; height: 100px; background-color: #D6B8D5; border-radius: 50%; display: flex; justify-content: center;">
                                <span class="profile-icon" style="font-size: 60px;">&#128103;</span>
                            </div>
                            <h6 class="mt-2">{{ $comment->nama }}</h6>
                        </div>
                        <div class="col-9">
                            <p class="mb-0">{{ $comment->comment }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel">Tambahkan Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Comment Form -->
                <form method="post" action="/testimoni">
                    @csrf
                    <div class="form-group">
                        <label for="commentName">Nama:</label>
                        <input type="text" class="form-control" id="commentName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="commentContent">Komentar:</label>
                        <textarea class="form-control" id="commentContent" name="comment" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- End Modal Formulir -->
    <div class="row justify-content-end">
        <div class="col-sm-2">
            <button type="button" class="btn" id="editButton" data-target="#commentModal" data-toggle="modal" style="background-color: #e8b548; color: #fff;">
                <i class="fas fa-comment"></i> Tambahkan Komentar
            </button>
        </div>
    </div>



    <!-- FootNote -->
    <div class="footNote">
        <div class="row">
            <div class="col" style="margin-right: 20px;">
                <h3 class="aboutUs">About Us</h3>
                <hr class="bold-hr" style="border: 1px solid black;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare cursus sed nunc eget dictum  Sed ornare cursus sed nunc eget dictumd nunc eget dictum  Sed ornare cursus sed nunc eget dictum </p>
                <a href="https://www.instagram.com/aniqahcollectionn/" class="text-decoration-none" target="blank" style="color: #000000">
                    <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://www.facebook.com/inha.jiun" class="text-decoration-none" target="blank" style="color: #000000">   
                    <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=+6285299581471" class="text-decoration-none" target="blank" style="color: #000000">
                    <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>