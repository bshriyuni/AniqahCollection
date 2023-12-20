<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="css/cssuser/profil.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @font-face {
            font-family: "OleoScript-Bold";
            src: url(/font/OleoScript-Bold.ttf) format('truetype');
        }
        @font-face {
            font-family: "Inter-Light";
            src: url(/font/Inter-Light.ttf) format('truetype');
        }
        @font-face {
            font-family: "Inter-ExtraBold";
            src: url(/font/Inter-ExtraBold.ttf) format('truetype');
        }
        @font-face {
            font-family: "Inter-Regular";
            src: url(/font/Inter-Regular.ttf) format('truetype');
        }
    </style>
</head>
<body style="background-color:#FFFFFF;">
    <!-- Brand App --> 
    <div class="ps-5 mb-4 pt-2">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <p class="textAniqah m-0" style="font-size: 64px; margin-bottom: 0px; font-family: 'OleoScript-Bold';">Aniqah Collection</p>
                <p class="deskripsiBrand fs-5 fst-italic fw-light m-0" style="font-family: 'Inter-Light'; font-size: 20px;margin-top: 0px; font-style: italic;">
                Tempat Penyewaan Baju Bodo</p>
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
                        <a href="/profil" class="text-decoration-none" style="color: #000000;">Selamat datang, {{ Auth::user()->username }}</a>
                    </button>
                @endguest
            </div>
        </div>
    </div>
    <!-- end Brand App -->
    
    <!-- Menu App -->
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #BBD6B8; margin-top: 30px; text-align: justify;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0" style="display: flex; justify-content: space-between; width: 100%;">
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/carapemesanan">Cara Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Profil Saya -->
    <div class="profil" style="display: flex; justify-content: space-between; width: 100%; margin: 0 auto;">
        <div class="content-left" style="flex-basis: 25%; margin-left: 30px; margin-top: 30px;">
            <div class="row">
                <div class="profile-circle col-7" style="width: 100px;height: 100px; background-color: #D6B8D5; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                    <span class="profile-icon" style="font-size: 60px;">&#128103;</span>
                </div>
                <div class="username col-5" style="margin-top: 15px;">
                    <div>
                        @if($profil)
                            <p>{{ $profil['username'] }}</p>
                        @endif
                        <a href="/profil/edit"><i class="editProfil fas fa-edit">
                            Edit Profile
                        </i> </a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="d-flex flex-column">
                <button class="btn mb-2" style="text-align: left;">
                    <a href="/profil" class="text-decoration-none" style="color: #000;">
                        <i class="fas fa-user"> </i>
                        Akun Saya
                    </a>
                </button>
                <button class="btn"  style="text-align: left;">
                    <a href="/profil/pesanan" class="text-decoration-none" style="color: #E97E67;">
                        <i class="fas fa-shopping-cart"></i>
                        Pesanan Saya
                    </a>
                </button>
            </div>
        </div>
        <div class="vertical-line" style="border-left: 2px solid #D9D9D9 ; height: 1500px; margin-top: 20px; margin-bottom: 20px;"></div>
        <div class="content-right" style="flex-basis: 80%; margin-left: 30px; margin-top: 30px;">
            <div class="card" style="margin-right: 30px; background-color: #F7F0F0">
                <div class="card-header" style="background-color: #BBD6B8">
                    <p style="font-size: 25px">Pesanan</p>
                </div>
                <div class="card-body">
                    @foreach($pesanan as $item)
                        <div class="row">
                            <a class="col-3" href="/detailproduct/{{ $item->kode_baju}}" style="text-decoration: none; color: black;">
                                <div class="container" style="background-color: #F4EEEE; padding:5px;">
                                    <img src="{{ asset('foto/' .  $item->gambar) }}" class="card-img-bottom" alt="..." style="height: 200px;">
                                </div>
                            </a>
                            <div class="col-9">
                                <h2>{{ $item->status }}</h2>
                                <h5>{{ $item->kode_baju }}</h5>
                                <h5>Rp {{ $item->total_harga }}</h5>
                                <p>Metode Pembayaran: {{ $item->pembayaran}}</p>
    
                                @if(in_array($item->status, ['Pesanan Dibatalkan', 'Selesai', 'Diambil', 'Dibatalkan']))
                                    <button type="button" class="btn" style="background-color: #E97E67" disabled>
                                        Batalkan Pesanan 
                                    </button>
                                @else
                                    <button id="editButton" type="button" class="btn" style="background-color: #E97E67" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">
                                        Batalkan Pesanan
                                    </button>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <!-- Modal Edit Produk-->
                        @if(isset($item))
                        <div class="modal fade" id="modal-delete-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content m-20">
                                    <div class="modal-header" style="background-color: #BBD6B8">
                                        <h5 class="modal-title" id="exampleModalLabel">Batalkan Pesanan</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
                                            style="margin-right:10px;"></button>
                                    </div>
                                    <div class="modal-body" style="margin-left:30px; margin-top:20px;">
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Nama Lengkap</p>
                                                <p class="col-sm-8">: {{ $item->nama_lengkap }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">No Telepon</p>
                                                <p class="col-sm-8">: {{ $item->no_hp }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Alamat</p>
                                                <p class="col-sm-8">: {{ $item->alamat }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Kode Baju</p>
                                                <p class="col-sm-8">: {{ $item->kode_baju }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Tanggan Pengambilan</p>
                                                <p class="col-sm-8">: {{ $item->tgl_pengambilan }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Tanggan Pengembalian</p>
                                                <p class="col-sm-8">: {{ $item->tgl_pengembalian }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Total Harga</p>
                                                <p class="col-sm-8">: {{ $item->total_harga }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Status Pemesanan</p>
                                                <p class="col-sm-8">: {{ $item->status }}</p>
                                        </div>
                                        <div class="row mb-2">
                                            <p class="col-sm-4">Metode Pembayaran</p>
                                                <p class="col-sm-8">: {{ $item->pembayaran }}</p>
                                        </div>
                                        <p class="text-danger">Jika melakukan pembatalan pesanan maka pesanan diatas tidak akan disiapkan oleh admin!!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                        <form action="{{ route('order.updatestatus', $item->id) }}" method="post">
                                            @csrf
                                            @method('post')
                                            <button type="submit" class="btn btn-primary">Batalkan Pesanan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- End Modal Edit Produk-->
                    @endforeach
                    {{ $pesanan->links('pagination::bootstrap-5') }}
                </div>
            </div>
            <br>
            <div class="card" style="margin-right: 30px; background-color: #F7F0F0">
                <div class="card-header" style="background-color: #BBD6B8">
                    <p style="font-size: 25px">Riwayat Pesanan</p>
                </div>
                <div class="card-body">
                    @foreach($riwayat as $item)
                        <div class="row">
                            <a class="col-3" href="/detailproduct/{{ $item->kode_baju}}" style="text-decoration: none; color: black;">
                                <div class="container" style="background-color: #F4EEEE; padding:5px;">
                                    <img src="{{ asset('foto/' .  $item->gambar) }}" class="card-img-bottom" alt="..." style="height: 200px;">
                                </div>
                            </a>
                            <div class="col-9">
                                <h2>{{ $item->status }}</h2>
                                <h5>{{ $item->kode_baju }}</h5>
                                <h5>Rp {{ $item->total_harga }}</h5>
                                <p>Metode Pembayaran: {{ $item->pembayaran}}</p>

                                @if(in_array($item->status, ['Pesanan Dibatalkan', 'Selesai', 'Diambil', 'Dibatalkan']))
                                    <button type="button" class="btn" style="background-color: #E97E67" disabled>
                                        Batalkan Pesanan 
                                    </button>
                                @else
                                    <button id="editButton" type="button" class="btn" style="background-color: #E97E67" data-toggle="modal" data-target="#modal-delete-{{ $item->users_id }}">
                                        Batalkan Pesanan
                                    </button>
                                @endif
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Profil Saya -->

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
    <div class="footNote" style="background-color: #BBD6B8; padding: 40px;">
        <div class="ini row" style="margin: 60px;">
            <div class="col" style="margin-right: 20px;">
                <h3 class="aboutUs" style="font-family: 'Inter-ExtraBold';">About Us</h3>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>