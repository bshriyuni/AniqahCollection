    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lokasi - ADMIN</title>

        <!-- Link Bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Link CSS -->
        <link rel="stylesheet" href="css/cssadmin/lokasi.css">
        <!-- link font awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            let map;
            let marker;
            let border;

            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: { lat: {{ $lokasiTerbaru->latitude }}, lng: {{ $lokasiTerbaru->longitude }} },
                    zoom: 20,
                });

                // Buat marker dengan koordinat yang ditentukan
                marker = new google.maps.Marker({
                    position: { lat: {{ $lokasiTerbaru->latitude }}, lng: {{ $lokasiTerbaru->longitude }} }, // Ganti dengan koordinat yang Anda inginkan
                    map: map,
                    title: "Lokasi yang Ditandai", // Ganti dengan judul marker Anda
                });

                // Menambahkan border
                const borderCoordinates = [
                    { lat: {{ $lokasiTerbaru->latitude }}, lng: {{ $lokasiTerbaru->longitude }} }, // Ganti dengan koordinat yang diinginkan
                    { lat: {{ $lokasiTerbaru->latitude }}, lng: {{ $lokasiTerbaru->longitude }} }, // Tambahkan koordinat border berikutnya di sini
                ];

                border = new google.maps.Polyline({
                    path: borderCoordinates,
                    geodesic: true,
                    strokeColor: "#FF0000",
                    strokeOpacity: 1.0,
                    strokeWeight: 2,
                });

                border.setMap(map);
            }
        </script>

    </head>
    <body>
        <!-- Brand App -->
        <div class="row brandApp">
            <div class="col-md-11 col-12 Aniqah" style="margin-top: -30px; margin-bottom: -40px;">
                <h1 class="textAniqah">Aniqah Collection</h1>
                <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
            </div>
            <div class="col-md-1 col-12" style="text-align: right;">
                <button id="editButton" type="button" class="btn btn-light" data-toggle="modal" data-target="#editModal" style="margin-right: -20px;">
                    <i class="fas fa-pencil-alt fa-2x"></i>
                </button>
            </div>
        </div>
        <!-- end Brand App -->

        <!-- Modal Edit Lokasi -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #BBD6B8">
                        <h5 class="modal-title" id="exampleModalLabel">Aniqah Collection</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right:10px;"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Isi di sini -->
                        <h3 class="h3Lokasi">Lokasi</h3>
                        <form class="mx-auto" style="max-width: 700px;" action="/adminlokasi" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="text" class="form-label">Nama Jalan:</label>
                                <input type="text" class="form-control" id="namaJalan" placeholder="Nama Jalan" name="namaJalan" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Kota, Provinsi:</label>
                                <input type="text" class="form-control" id="kotaProvinsi" placeholder="Kota, Provinsi" name="kotaProvinsi" required>
                            </div>
                            <div class="mb-3">
                                <label for="negara" class="form-label">Negara:</label>
                                <input type="text" class="form-control" id="negara" placeholder="Negara" name="negara" required>
                            </div>
                            <div class="mb-3">
                                <label for="latitude" class="form-label">Koordinat:</label>
                                <input type="text" class="form-control" style="margin-top: 2px; width: 200px" id="latitude" placeholder="Latitude" name="latitude" required>
                                <input type="text" class="form-control" style="margin-top: 2px; width: 200px" id="longitude" placeholder="Longitude" name="longitude" required>
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
        <!-- End Modal Edit Lokasi -->

        <!-- Modal Alert -->
        <!-- Modal untuk pesan berhasil -->
        <div class="modal" id="successModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <i class="fas fa-check-circle fa-5x" style="color: #28a745;"></i>
                        <p class="mt-3">Data lokasi berhasil disimpan.</p>
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
                        <p class="mt-3">Gagal menyimpan data lokasi.</p>
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
                            <a class="nav-link" href="/adminproduct">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="/adminlokasi">Lokasi</a>
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

        <!-- Maps -->
        <div>
            <div id="map"></div>  
        </div>
        <!-- End Maps -->

        <!-- Detail Lokasi -->
        <div class="detail_lokasi">
            <div class="JudulDetailLokasi">
                <h3 class="detailLokasi">
                    Detail Lokasi
                </h3>
            </div>
            <div class="logoHome">
                <i class="fas fa-home fa-9x"></i>
            </div>
            <div class="lokasi">
                <h4 id="namaJalanDetail">{{ $lokasiTerbaru->nama_jalan }}</h4>
                <h4 id="kotaProvinsiDetail">{{ $lokasiTerbaru->kota_prov }}</h4>
                <h4 id="negaraDetail">{{ $lokasiTerbaru->negara }}</h4>
            </div>
        </div>
        <!-- End Detail Lokasi -->

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </body>
    </html>