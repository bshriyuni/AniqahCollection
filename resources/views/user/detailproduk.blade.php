<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    
    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssuser/detailproduk.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}">
    <!-- Tambahkan skrip FullCalendar -->
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />

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
    <nav class="navbar navbar-expand-sm costom-navbar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lokasi">Lokasi</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Detail Produk -->
    <div class="dateilProduk">
        <div class="row">
            <!-- Produk -->
            <div class="col-md-6">
                <div class="produk">
                    <div class="card" style="width: 100%">
                        <img src="{{ asset('foto/bajubodoabu.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="kodeBaju">KODE BAJU</h5>
                            <p class="desBaju">Lorem ipsum dolor sit amet, adipiscing elit. Sed ornare cursus sed nunc eget dictum Sed ornare</p>
                            <h5 class="harga">Rp 100.000</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Kolom Kedua -->
            <div class="col-md-6">
                <div class="keteranganlainnya">
                    <!-- Kalender -->
                    <div class="row">
                        <div class="col-md-12">
                            <p>disini kalender</p>
                            <div id="calender"></div>
                        </div>
                    </div>
                    
                    <!-- Keterangans -->
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <span class="badge bg-secondary m-2">Unavailable</span>
                            <span class="badge bg-success m-2">Available</span>
                            <span class="badge bg-danger m-2">Booked</span>
                        </div>
                    </div>

                    <!-- Syarat & Ketentuan -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="background-color: #F4EEEE; color: #000000; padding:15px">
                                <h5 class="sk">Syarat & Ketentuan</h5>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Detail Produk -->

    <!-- Tombol Booking -->
    <div class="tombolBooking">
        <button type="button" class="btn btn-primary btn-block full-width-btn btn-outline-0" style="background-color: #BBD6B8; color: #000000;" id="bookingButton">Booking Sekarang</button>
    </div>
    <!-- End Tombol Booking -->

    <!-- Modal Form-->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi formulir booking di sini -->
                    <form>
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control custom-input" id="inputName" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNoTelpon" class="col-sm-3 col-form-label">No Telpon</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control custom-input" id="inputNoTelpon" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputKodeBaju" class="col-sm-3 col-form-label">Kode Baju</label>
                            <div class="col-sm-9">
                                <div class="input-group" id="modelLain">
                                    <input type="text" class="forAdd form-control custom-input" id="inputKodeBaju">
                                    <input type="number" class="forAdd form-control custom-input" id="inputJumlahDewasa" placeholder="Dewasa">
                                    <input type="number" class="forAdd form-control custom-input" id="inputJumlahAnak" placeholder="Anak">
                                </div>
                            </div>
                            <!-- Form Tambah Model Lain -->
                            <div class="col" style="margin-left: 200px;">
                                <button class="btn btn-sm btn-custom-sm" id="tambahModelLain">
                                    <i class="fas fa-plus"></i> Tambah Model Lain
                                </button>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputTglPengambilan" class="col-sm-3 col-form-label">Tgl Pengambilan</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control custom-input" id="inputTglPengambilan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTglPengembalian" class="col-sm-3 col-form-label">Tgl Pengembalian</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control custom-input" id="inputTglPengembalian">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="note">Note: Pengambilan dan pengembalian baju diberlakukan maximal 2 hari. jika melewati batas tersebut maka akan dikenakan biaya denda sesuai s&k yang berlaku</p>
                    <button type="button" class="btn btn-success" id="submit">Submit</button>
                </div>
            </div>  
        </div>
    </div>
    <!-- End Modal Form-->

    <!-- Modal Submit -->
    <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pesanan</h5>
                </div>
                <div class="modal-body">
                    <div class="row mb-3" style="margin-top: 30px;">
                        <p class="col-sm-5">Nama Lengkap</p>
                        <p class="nama col-sm-7" id="namaLengkap">Kelly Jenner</p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Nomor Telpon</p>
                        <p class="nama col-sm-7" id="nomorTelpon">081234567890</p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Kode Baju</p>
                        <p class="nama col-sm-2" id="kodeBaju">A0203</p>
                        <p class="nama col-sm-3" id="dewasa">Dewasa: </p>
                        <p class="nama col-sm-2" id="anak">Anak: </p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Tanggal Pengambilan</p>
                        <p class="nama col-sm-7" id="tglAmbil">21/10/23</p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Tanggal Pengembalian</p>
                        <p class="nama col-sm-7" id="tglKembali">23/10/23</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="note">Note: Pengambilan dan pengembalian baju diberlakukan maximal 2 hari. jika melewati batas tersebut maka akan dikenakan biaya denda sesuai s&k yang berlaku</p>
                    <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
                    <button type="button" class="btn btn-success" id="btnKonfirmasi">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Submin -->

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
                <button class="buttonAdmin">ADMIN</button>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid black;"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- End Foot Note -->

    <!-- JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var bookingButton = document.getElementById('bookingButton');
            var closeButton = document.querySelector('.btn-close');

             // Menambahkan event listener untuk menampilkan modal pemesanan saat tombol "Submit" ditekan
            bookingButton.addEventListener('click', function () {
                resetInputValues(); // Mengatur ulang nilai inputan pada modal
                $('#bookingModal').modal('show'); // Menampilkan modal
            });

            // Menutup modal saat tombol close (icon "X") ditekan
            closeButton.addEventListener('click', function () {
                resetInputValues(); // Mengatur ulang nilai inputan pada modal saat modal ditutup
                $('#bookingModal').modal('hide'); // Menyembunyikan modal
            });

            // Fungsi untuk mengatur ulang nilai inputan pada modal form
            function resetInputValues() {
                document.getElementById('inputName').value = '';
                document.getElementById('inputNoTelpon').value = '';
                document.getElementById('inputKodeBaju').value = '';
                document.getElementById('inputJumlahDewasa').value = '';
                document.getElementById('inputJumlahAnak').value = '';
                document.getElementById('inputTglPengambilan').value = '';
                document.getElementById('inputTglPengembalian').value = '';
            }

            // Tambahkan event listener untuk tombol "Submit"
            var submitButton = document.getElementById('submit');
            submitButton.addEventListener('click', function () {
                // Mengambil nilai dari inputan modal form
                var namaLengkap = document.getElementById('inputName').value;
                var nomorTelpon = document.getElementById('inputNoTelpon').value;
                var kodeBaju = document.getElementById('inputKodeBaju').value;
                var jumlahDewasa = document.getElementById('inputJumlahDewasa').value;
                var jumlahAnak = document.getElementById('inputJumlahAnak').value;
                var tglPengambilan = document.getElementById('inputTglPengambilan').value;
                var tglPengembalian = document.getElementById('inputTglPengembalian').value;

                // jika inputan kosong
                if (namaLengkap.trim() === "" || nomorTelpon.trim() === "" || kodeBaju.trim() === "" || jumlahDewasa.trim() === "" || jumlahAnak.trim() === "" || tglPengambilan.trim() === "" || tglPengembalian.trim() === "") {
                    // Jika ada input yang kosong, beritahu pengguna dan hentikan operasi selanjutnya
                    alert("Harap isi semua input sebelum mengirimkan formulir!");
                    return;
                }

                var tambahModels = document.querySelectorAll('.additional-model');
                var tambahanData = [];

                tambahModels.forEach(function (model) {
                    var tambahan = {
                        kodeBaju: model.querySelector('#inputKodeBaju').value,
                        jumlahDewasa: model.querySelector('#inputJumlahDewasa').value,
                        jumlahAnak: model.querySelector('#inputJumlahAnak').value
                    };
                    tambahanData.push(tambahan);
                });

                // Menampilkan nilai-nilai tersebut pada modal submit
                document.getElementById('namaLengkap').textContent = namaLengkap;
                document.getElementById('nomorTelpon').textContent = nomorTelpon;
                document.getElementById('kodeBaju').textContent = kodeBaju;
                document.getElementById('dewasa').textContent = 'Dewasa: ' + jumlahDewasa;
                document.getElementById('anak').textContent = 'Anak: ' + jumlahAnak;
                document.getElementById('tglAmbil').textContent = tglPengambilan;
                document.getElementById('tglKembali').textContent = tglPengembalian;

                //mengambil data dari setiap model tambahan yang telah ditambahkan oleh pengguna
                tambahanData.forEach(function (data, index) {
                    if (data.kodeBaju && data.kodeBaju.trim() !== "") {
                        var detailModel = document.getElementById('kodeBaju' + (index + 2));
                        if (detailModel) {
                            detailModel.textContent = data.kodeBaju;
                        }
                    }
                    if (data.jumlahDewasa && data.jumlahDewasa.trim() !== "") {
                        var detailDewasa = document.getElementById('dewasa' + (index + 2));
                        if (detailDewasa) {
                            detailDewasa.textContent = 'Dewasa: ' + data.jumlahDewasa;
                        }
                    }
                    if (data.jumlahAnak && data.jumlahAnak.trim() !== "") {
                        var detailAnak = document.getElementById('anak' + (index + 2));
                        if (detailAnak) {
                            detailAnak.textContent = 'Anak: ' + data.jumlahAnak;
                        }
                    }
                });

                $('#submitModal').modal('show');
                $('#bookingModal').modal('hide');
            });

            // Tambahkan event listener untuk tombol "Batal"
            var batalButton = document.getElementById('btnBatal');
            batalButton.addEventListener('click', function () {
                $('#submitModal').modal('hide');
            });

            // Event listener untuk tombol "Tambah Model Lain"
            var tambahModelLainButton = document.querySelector('#tambahModelLain');
            tambahModelLainButton.addEventListener('click', function (e) {
                e.preventDefault();
                var kodeBajuDiv = document.querySelector('#modelLain');
                var clonedDiv = kodeBajuDiv.cloneNode(true);
                clonedDiv.classList.add('additional-model');
                clonedDiv.querySelector('#inputKodeBaju').value = '';
                clonedDiv.querySelector('#inputJumlahDewasa').value = '';
                clonedDiv.querySelector('#inputJumlahAnak').value = '';

                kodeBajuDiv.parentNode.appendChild(clonedDiv);
            });

            // Event listener untuk menangani penutupan modal
            $('#bookingModal').on('hidden.bs.modal', function (e) {
                var existingModels = document.querySelectorAll('.additional-model');
                existingModels.forEach(function (model) {
                    model.parentNode.removeChild(model);
                });
            });

            // Kalender
            var calendarEl = document.getElementById('calender');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    // Data ketersediaan untuk penyewaan baju
                    {
                        title: 'Tersedia',
                        start: '2023-10-01',
                        color: 'green'
                    },
                    {
                        title: 'Tersedia',
                        start: '2023-10-03',
                        color: 'green'
                    },
                    {
                        title: 'Tidak Tersedia',
                        start: '2023-10-05',
                        color: 'red'
                    }
                    // dan seterusnya, tambahkan data ketersediaan yang diperlukan di sini
                ]
            });
            calendar.render();
        });
    </script>
    <!-- End JS -->

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>