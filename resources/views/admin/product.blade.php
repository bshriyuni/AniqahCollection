<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Produk - ADMIN</title>

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
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right:10px;"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Isi di sini -->
                        <h3 class="h3Lokasi">Tambahkan Produk</h3>
                        <form class="mx-auto" style="max-width: 700px;" action="/adminproduct" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="kodeBaju" class="col-sm-3 col-form-label">Kode Baju</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodeBaju" name="kodeBaju" autofocus>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputDeskripsi" class=" col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control summernote" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputFoto" class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="foto" accept="image/*" name="gambar" onchange="previewImage(event)">
                                    <div id="imagePreview"></div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputDewasa" class="col-sm-3 col-form-label">Jumlah Dewasa</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" id="jumlahDewasa" name="jumlahDewasa">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputAnak" class="col-sm-3 col-form-label">Jumlah Anak</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" id="jumlahAnak" name="jumlahAnak">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputS&K" class=" col-sm-3 col-form-label">Syarat & Ketentuan</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control summernote" id="syaratKetentuan" name="syaratKetentuan" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputHarga" class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="harga" name="harga">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="offset-sm-10">
                                    <button type="submit" class="btn btn-success" id="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
        <!-- End Modal Add Produk-->

        <!-- Modal Alert -->
            <!-- Modal untuk pesan berhasil -->
            <div class="modal" id="successModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            <i class="fas fa-check-circle fa-5x" style="color: #28a745;"></i>
                            <p class="mt-3">Produk Berhasil Ditambahkan</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal untuk pesan berhasil -->

            <!-- Modal untuk pesan gagal -->
            <div class="modal" id="errorModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            <i class="fas fa-times-circle fa-5x" style="color: #dc3545;"></i>
                            <p class="mt-3">Gagal menambahkan produk</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal untuk pesan gagal -->

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
            <!-- End Modal Alert -->
            
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
                            <a class="nav-link fw-bold" href="/adminproduct">Produk</a>
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
                            <a class="nav-link" href="/adminjahit">Jahit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Menu App -->

        <!-- produk -->
        <div class="container text-center">
            <div class="row align-items-start">
                @foreach($clothes as $clothing)
                <div class="col col-4">
                    <div class="card" style="background-color: #BBD6B8; padding:5px">
                        <div class="card-body" style="text-align :start;">
                            <h4 class="card-title">{{ $clothing->kode_baju }}</h4>
                            <p class="card-text">{{ $clothing->deskripsi }}</p> 
                            <h6>Rp {{$clothing->harga}}</h6>
                        </div>
                        <div class="container" style="background-color: #F4EEEE; padding:5px;">
                            <img src="{{ asset('foto/' . $clothing->gambar) }} {{ $clothing->foto }}" class="card-img-bottom" alt="..." style="height: 300px;">
                        </div>
                        <div class="">
                            <a href="{{ route('produk.delete', $clothing->id) }}" type="button" class="btn" data-toggle="modal" data-target="#modal-edit" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $clothing->id }}').submit();">
                                <i class="fas fa-trash text-danger"></i>
                            </a>
                            <form id="delete-form-{{ $clothing->id }}" action="{{ route('produk.delete', $clothing->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="" type="button" class="btn"><i class="fas fa-edit text-info"></i></a>                            
                        </div>
                    </div>
                    <br><br>
                </div>
                @endforeach
                <!-- pagination -->
                <nav aria-label="page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a href="#" class="page-link" aria-label="Sebelumnya">
                            <span aria-hidden="True">&laquo;</span></a>
                        </li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link" aria-label="Selanjutnya">
                            <span aria-hidden="True">&raquo;</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Pagination -->
            </div>
        </div>
        <!-- End Produk -->

        <!-- Modal Edit Produk-->
        <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #BBD6B8">
                        <h5 class="modal-title" id="exampleModalLabel">Aniqah Collection</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right:10px;"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Isi di sini -->
                        <h3 class="h3Lokasi">Edit Produk</h3>
                        <form class="mx-auto" style="max-width: 700px;" action="/edit/{id}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="kodeBaju" class="col-sm-3 col-form-label">Kode Baju</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodeBaju" name="kodeBaju" autofocus>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputDeskripsi" class=" col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control summernote" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputFoto" class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputDewasa" class="col-sm-3 col-form-label">Jumlah Dewasa</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" id="jumlahDewasa" name="jumlahDewasa">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputAnak" class="col-sm-3 col-form-label">Jumlah Anak</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" id="jumlahAnak" name="jumlahAnak">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputS&K" class=" col-sm-3 col-form-label">Syarat & Ketentuan</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control summernote" id="syaratKetentuan" name="syaratKetentuan" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputHarga" class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="harga" name="harga">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="offset-sm-10">
                                    <button type="submit" class="btn btn-success" id="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
        <!-- End Modal Edit Produk-->

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
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>