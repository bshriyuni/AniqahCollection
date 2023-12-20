<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Pemesanan - ADMIN</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssadmin/carapemesanan.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <!-- Brand App -->
    <div class="row brandApp">
        <div class="col-md-11 col-12 Aniqah" style="margin-top: -30px; margin-bottom: -40px;">
            <h1 class="textAniqah">Aniqah Collection</h1>
            <h7 class="deskripsiBrand">Tempat Penyewaan Baju Bodo</h7>
        </div>
        <div class="col-md-1 col-12" style="text-align: right;">
            <button id="editButton" type="button" class="btn btn-light" data-toggle="modal" data-target="#editModal" style="margin-right: -20px;">
                <i class="fas fa-plus fa-2x"></i>
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
                        <a class="nav-link" href="/pesanan">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adminproduct">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adminlokasi">Lokasi</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/admintestimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/admincarapemesanan">Cara Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <!-- End Menu App -->

    <!-- Tata Cara Pemesanan -->
        <div class="judul text-center py-4">
            <h1>TATA CARA PEMESANAN</h1>
        </div>
        
        <div class="row">
            @foreach($carapesan as $pesan)
            <div class="col col-6">
                <div class="row">
                    <div class="col-3">
                        <div class="rounded-card">
                            <p class="custom-text" id="step1">{{ $pesan->no }}</p>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="custom-card" >
                            <div class="card-body" style="text-align :start; width: 300px; height: 200px;">
                                <p class="card-text" id="step1">{{ $pesan->step }}</p> 
                            </div>
                            <div class="">
                                <a href="{{ route('carapemesanan.destroy', $pesan->id) }}" type="button" class="btn" data-toggle="modal" data-target="#modal-edit" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pesan->id }}').submit();">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                                <form id="delete-form-{{ $pesan->id }}" action="{{ route('carapemesanan.destroy', $pesan->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a href="modal-edit-{{ $pesan->id }}" type="button" class="btn" data-toggle="modal" data-target="#modal-edit-{{ $pesan->id }}">
                                    <i class="fas fa-edit text-info"></i>
                                </a>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit step-->
            @if(isset($pesan))
            <div class="modal fade" id="modal-edit-{{ $pesan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                            <div class="modal-header" style="background-color: #BBD6B8">
                                <h5 class="modal-title" id="exampleModalLabel">Aniqah Collection</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right:10px;"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Isi di sini -->
                                <h3 class="h3carapesan">Edit Step</h3>
                                <form class="mx-auto" style="max-width: 700px;" action="{{ route('carapemesanan.update', $pesan->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="nostep" class="col-sm-3 col-form-label">No Step</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nostep" name="nostep" value="{{ $pesan->no }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="isistep" class="col-sm-3 col-form-label">Isi Step</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control summernote" id="isistep" name="isistep" required>{{ $pesan->step }}</textarea>
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
                 @endif
                <!-- End Edit Step -->
            @endforeach
        </div> 
        <!-- End Tata Cara Pemesanan -->
        
        <!-- Btn Logout -->
        <div class="logout-button text-end" style=" position: fixed; bottom: 10px; right: 20px;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="background-color: #f5f0f0; color: #1c1616; padding: 10px 20px; border-radius: 20px; cursor: pointer; font-style: italic;">Logout</button>
            </form>
        </div>
        <!-- End Btn Logout -->

    <!-- Modal Form Add Step-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #BBD6B8">
                    <h5 class="modal-title" id="exampleModalLabel">Aniqah Collection</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right:10px;"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi di sini -->
                    <h3 class="h3carapesan">Tambahkan Step</h3>
                    <form class="mx-auto" style="max-width: 700px;" action="/admincarapemesanan" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="noStep" class="col-sm-3 col-form-label">No Step</label>
                            <div class="col-sm-9">
                                <input type="text" name="noStep" class="form-control custom-input" id="step" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="noStep" class="col-sm-3 col-form-label"> Isi Step</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" id="step" name="step" required></textarea>
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
    <!-- End Modal Add Step-->

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
    <!-- End Foot Note -->

     

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

</body>
</body>
</html>



