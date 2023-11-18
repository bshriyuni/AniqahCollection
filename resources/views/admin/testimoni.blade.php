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
</head>
<body>
    <!-- Brand App -->
    <div class="brandApp d-flex justify-content-between align-items-center">
        <div class="Aniqah" style="margin-top: 20px;">
            <h1 class="textAniqah">Aniqah Collection</h1>
            <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    <li class="nav-item">
                        <a class="nav-link" href="/adminjahit">Jahit</a>
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
        <div class="col-lg-4 col-6 mb-3">
            <!-- small box -->
            <div class="small-box custom-bg mx-auto rounded d-flex align-items-center">
                <div class="inner">
                    <img class="card-img-top img-fluid rounded" alt="" src="{{ asset('foto/' . $testimoni->gambar) }}" >
                    <a href="{{ route('testimoni.destroy', $testimoni->id) }}" type="button" class="btn" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $testimoni->id }}').submit();">
                        <i class="fas fa-trash"></i>
                    </a>
                    <form id="delete-form-{{ $testimoni->id }}" action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
            <!-- /.small-box -->
        </div>
        @endforeach
    </div>
    <!-- /.row -->
</div>
<br>
<br>
<br>

<!-- /.card-body -->

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
    
    <!-- End Foot Note -->

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</body>
</html>