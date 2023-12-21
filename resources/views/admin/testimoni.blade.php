<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni - ADMIN</title>
    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssadmin/admintestimoni.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <!-- Brand App -->
    <div class="brandApp d-flex justify-content-between align-items-center">
        <div class="Aniqah" style="margin-top: 20px;">
            <h1 class="textAniqah">Aniqah Collection</h1>
            <h7 class="deskripsiBrand">Tempat Penyewaan Baju Bodo</h7>
        </div>

        <!-- tombol edit testimoni -->
        <div class="col-sm-1">
            <button type="button" class="btn btn-light" id="editButton" data-target="#editModal" data-toggle="modal">
                <i class="fas fa-plus fa-3x" ></i>
            </button>
        </div>

    </div>
    <!-- end Brand App -->
    
   <!-- modal -->
   <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gambar Testimoni</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form class="mx-auto" style="max-width: 700px;" action="/admintestimoni" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="upload-container" onclick="document.getElementById('fileInput').click();">
                                <input type="file" id="fileInput" accept="image/*" name="gambar" onchange="previewImage(event)">
                                <div id="imagePreview"></div>
                                <!-- <i class="fas fa-camera fa-10x" style="justify-content: center; display: flex; align-items: center;"></i> -->
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Formulir -->

    <!-- Menu App -->
     <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/pesanan">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adminproduct">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adminlokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/admintestimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admincarapemesanan">Cara Pemesanan</a>
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
                        <img class="card-img-top img-fluid rounded" style="height: 350px;" alt="" src="{{ asset('foto/' . $testimoni->gambar) }}" >
                        <div class="mt-3">
                            <a href="{{ route('testimoni.destroy', $testimoni->id) }}" type="button" class="btn" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $testimoni->id }}').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            <form id="delete-form-{{ $testimoni->id }}" action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.small-box -->
            </div>
            @endforeach
        </div>
        <!-- /.row -->
    </div>

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
            <div class="col-12 mb-3">
                <div class="colReview p-3 shadow rounded w-100 mx-auto"> <!-- Mengubah lebar menjadi w-100 dan menambahkan mx-auto untuk menengahkan kolom -->
                    <div class="row align-items-center">
                        <div class="col-md-3"> <!-- Menggunakan col-md-3 agar di perangkat kecil tetap 100% -->
                            <div class="profile-circle col-8 mx-auto" style="width: 100px; height: 100px; background-color: #D6B8D5; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                <span class="profile-icon" style="font-size: 60px;">&#128103;</span>
                            </div>
                            <h6 class="mt-2">{{ $comment->nama }}</h6>
                        </div>
                        <div class="col-md-6"> <!-- Menggunakan col-md-6 agar di perangkat kecil tetap 100% -->
                            <p class="mb-0">{{ $comment->comment }}</p>
                        </div>
                        <div class="col-md-3"> <!-- Menggunakan col-md-3 agar di perangkat kecil tetap 100% -->
                            <form action="{{ route('testimoni.destroyComment', $comment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    <!-- Btn Logout -->
    <div class="logout-button text-end" style=" position: fixed; bottom: 10px; right: 20px;">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background-color: #f5f0f0; color: #1c1616; padding: 10px 20px; border-radius: 20px; cursor: pointer; font-style: italic;">Logout</button>
        </form>
    </div>
    <!-- End Btn Logout -->

    <!-- FootNote -->
    <div class="footNote">
        <div class="row">
            <div class="col" style="margin-right: 20px;">
                <h3 class="aboutUs">About Us</h3>
                <hr class="bold-hr" style="border: 2px solid black;">
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
    
    <script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('imagePreview');
            output.innerHTML = '<img src="' + reader.result + '" width="100%" height="100%" />';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<!-- Script Modal Alert -->
<script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '{{ session('success') }}'
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('error') }}'
                });
            @endif
        </script>
        <!-- End Script Modal Alert -->
    
    <!-- End Foot Note -->

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>