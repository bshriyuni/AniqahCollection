<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Lokasi</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssadmin/lokasi.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>

    <script>
        let map;
        let marker;
        let border;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -3.022163, lng: 120.212572 },
                zoom: 20,
            });

            // Buat marker dengan koordinat yang ditentukan
            marker = new google.maps.Marker({
                position: { lat: -3.022163, lng: 120.212572 }, // Ganti dengan koordinat yang Anda inginkan
                map: map,
                title: "Lokasi yang Ditandai", // Ganti dengan judul marker Anda
            });

            // Menambahkan border
            const borderCoordinates = [
                { lat: -3.022163, lng: 120.212572 }, // Ganti dengan koordinat yang diinginkan
                { lat: -3.022163, lng: 120.212572 }, // Tambahkan koordinat border berikutnya di sini
                // ... Lanjutkan menambahkan koordinat border yang diinginkan
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
        <div class="col-sm-11 Aniqah col-10" style="margin-top: -30px; margin-bottom: -40px; margin-left: -20px;">
            <h1 class="textAniqah">Aniqah Collection</h1>
            <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
        </div>
        <div class="col-sm-1" style="position: absolute; right: 0;">
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
                    <form class="mx-auto" style="max-width: 700px;" action="/action_page.php">
                        <div class="mb-3 mt-3">
                            <label for="text" class="form-label">Nama Jalan:</label>
                            <input type="text" class="form-control" id="namaJalan" placeholder="Nama Jalan" name="namaJalan">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Kota, Provinsi:</label>
                            <input type="text" class="form-control" id="kotaProvinsi" placeholder="Kota, Provinsi" name="kotaProvinsi">
                        </div>
                        <div class="mb-3">
                            <label for="negara" class="form-label">Negara:</label>
                            <input type="text" class="form-control" id="negara" placeholder="Negara" name="negara">
                        </div>
                        <div class="mb-3">
                            <label for="latitude" class="form-label">Koordinat:</label>
                            <input type="text" class="form-control" style="margin-top: 2px; width: 200px" id="latitude" placeholder="Latitude" name="latitude" required>
                            <input type="text" class="form-control" style="margin-top: 2px; width: 200px" id="longitude" placeholder="Longitude" name="longitude" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="submit">Submit</button>
                </div>
            </div>  
        </div>
    </div>
    <!-- End Modal Edit Lokasi -->

    <!-- Menu App -->
    <nav class="navbar navbar-expand-sm costom-navbar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
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
                        <a class="nav-link" href="/crapemesanan">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahitbaju">Jahit</a>
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
            <h4 id="namaJalanDetail">Jln.Pemuda II. (Perumahan Fortuna Permai)</h4>
            <h4 id="kotaProvinsiDetail">Takkalala, Wara Selatan, Palopo City, South Sulawesi</h4>
            <h4 id="negaraDetail">Indonesia</h4>
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
                <button class="buttonAdmin" style="bacground-color:black;">ADMIN</button>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid black;"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- End Foot Note -->

    <!-- Java Scrip -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var editButton = document.getElementById('editButton');
            var closeButton = document.querySelector('.btn-close');
            var submitButton = document.getElementById('submit');

            // Menambahkan event listener untuk menampilkan modal pemesanan saat tombol "Submit" ditekan
            editButton.addEventListener('click', function () {
                resetInputValues(); // Mengatur ulang nilai inputan pada modal
                $('#editModal').modal('show'); // Menampilkan modal
            });

            // Menutup modal saat tombol close (icon "X") ditekan
            closeButton.addEventListener('click', function () {
                $('#editModal').modal('hide'); // Menyembunyikan modal
                resetInputValues(); // Mengatur ulang nilai inputan pada modal saat modal ditutup

                // Fungsi untuk mengatur ulang nilai inputan pada modal form
                function resetInputValues() {
                    document.getElementById('namaJalan').value = '';
                    document.getElementById('kotaProvinsi').value = '';
                    document.getElementById('negara').value = '';
                    document.getElementById('latitude').value = '';
                    document.getElementById('longitude').value = '';
                }
            });

            // fungsi tombol submit
            submitButton.addEventListener('click', function () {
                var namaJalan = document.getElementById('namaJalan').value;
                var kotaProvinsi = document.getElementById('kotaProvinsi').value;
                var negara = document.getElementById('negara').value;
                var latitude = document.getElementById('latitude').value;
                var longitude = document.getElementById('longitude').value;

                 // Periksa apakah inputan kosong
                if (namaJalan === '' || kotaProvinsi === '' || negara === '' || latitude === '' || longitude === '') {
                    alert("Mohon isi semua kolom sebelum mengirim!");
                    return;
                }

                // Memperbarui tampilan detail lokasi
                document.getElementById('namaJalanDetail').innerText = namaJalan;
                document.getElementById('kotaProvinsiDetail').innerText = kotaProvinsi;
                document.getElementById('negaraDetail').innerText = negara;

                // Jika Anda ingin memperbarui juga marker pada peta, Anda perlu memperbarui posisi marker dengan koordinat yang baru dimasukkan
                marker.setPosition(new google.maps.LatLng(parseFloat(latitude), parseFloat(longitude)));
                map.setCenter(new google.maps.LatLng(parseFloat(latitude), parseFloat(longitude)));

                $('#editModal').modal('hide')
            });

        });
    </script>

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</body>
</html>