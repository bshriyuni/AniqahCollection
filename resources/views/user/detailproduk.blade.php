@extends('layout.main')

@section('title')
Produk
@endsection
@section('style')
<link rel="stylesheet" href="/css/calendar.css">
<script src="https://kit.fontawesome.com/2f5ba850ff.js" crossorigin="anonymous"></script>
@endsection
@section('container')
<!-- Detail Produk -->
<div class="dateilProduk">
    <div class="row">
        <!-- Produk -->
        <div class="col-md-6">
            <div class="produk">
                <div class="card" style="width: 100%">
                    <img src="../{{ $produk->foto }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="kodeBaju">{{$produk->kode_baju}}</h5>
                        <p class="desBaju">{{$produk->deskripsi}}</p>
                        <h5 class="harga">Rp {{$produk->harga}}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kedua -->
        <div class="col-md-6">
            <div class="keteranganlainnya">
                <!-- Kalender -->
                <div class="container" id="main">
                    <div class="carousel slide">
                        <h1 class="text-center">
                            <span id="left" href="#">
                                <i class="fa fa-chevron-left"></i>
                            </span>
                            <span>&nbsp;</span>
                            <span id="month"></span>
                            <span>&nbsp;</span>
                            <span id="year"></span>
                            <span>&nbsp;</span>
                            <a id="right" href="#">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <table class="table"></table>
                        </div>
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
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Detail Produk -->

<!-- Tombol Booking -->
<button type="button" class="btn btn-block w-100 btn-outline-0 mt-4" style="background-color: #BBD6B8;"
    id="bookingButton">Booking Sekarang</button>
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
                <div id="errorMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
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
                                <input type="text" class="forAdd form-control custom-input" id="inputKodeBaju"
                                    value="{{ $produk->kode_baju }}">
                                <input type="number" class="forAdd form-control custom-input" id="inputJumlahDewasa"
                                    min="1" placeholder="Dewasa">
                                <input type="number" class="forAdd form-control custom-input" id="inputJumlahAnak"
                                    min="1" placeholder="Anak">
                            </div>
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
                <p class="note">Note: Pengambilan dan pengembalian baju diberlakukan maximal 2 hari. jika melewati batas
                    tersebut maka akan dikenakan biaya denda sesuai s&k yang berlaku</p>
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
                <p class="note">Note: Pengambilan dan pengembalian baju diberlakukan maximal 2 hari. jika melewati batas
                    tersebut maka akan dikenakan biaya denda sesuai s&k yang berlaku</p>
                <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
                <button type="button" class="btn btn-success" id="btnKonfirmasi">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Submin -->


<!-- JS -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    var bookingButton = document.getElementById('bookingButton');
    var closeButton = document.querySelector('.btn-close');

    // Menambahkan event listener untuk menampilkan modal pemesanan saat tombol "Submit" ditekan
    bookingButton.addEventListener('click', function() {
        resetInputValues(); // Mengatur ulang nilai inputan pada modal
        $('#bookingModal').modal('show'); // Menampilkan modal
    });

    // Menutup modal saat tombol close (icon "X") ditekan
    closeButton.addEventListener('click', function() {
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
    var error_massage = document.getElementById('errorMessage')
    error_massage.style.display = 'none'; //sembunyikan alert ketika memuat modal
    submitButton.addEventListener('click', function() {
        // Mengambil nilai dari inputan modal form
        var namaLengkap = document.getElementById('inputName').value;
        var nomorTelpon = document.getElementById('inputNoTelpon').value;
        var kodeBaju = document.getElementById('inputKodeBaju').value;
        var jumlahDewasa = document.getElementById('inputJumlahDewasa').value;
        var jumlahAnak = document.getElementById('inputJumlahAnak').value;
        var tglPengambilan = document.getElementById('inputTglPengambilan').value;
        var tglPengembalian = document.getElementById('inputTglPengembalian').value;

        // jika inputan kosong
        if (namaLengkap.trim() === "" || nomorTelpon.trim() === "" || kodeBaju.trim() === "" ||
            jumlahDewasa.trim() === "" || jumlahAnak.trim() === "" || tglPengambilan.trim() === "" ||
            tglPengembalian.trim() === "") {
            // Jika ada input yang kosong, beritahu pengguna dan hentikan operasi selanjutnya
            error_massage.textContent = ("Harap isi semua inputan sebelum mengirim formulir")
            error_massage.style.display = 'block'; //tampilkan alert ketika tombol submit di tekan
            // Sembunyikan pesan kesalahan setelah 5 detik
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 3000);
            return;
        }

        var tambahModels = document.querySelectorAll('.additional-model');
        var tambahanData = [];

        tambahModels.forEach(function(model) {
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

        $('#submitModal').modal('show');
        $('#bookingModal').modal('hide');
    });

    // Tambahkan event listener untuk tombol "Batal"
    var batalButton = document.getElementById('btnBatal');
    batalButton.addEventListener('click', function() {
        $('#submitModal').modal('hide');
    });

    // Event listener untuk menangani penutupan modal
    $('#bookingModal').on('hidden.bs.modal', function(e) {
        var existingModels = document.querySelectorAll('.additional-model');
        existingModels.forEach(function(model) {
            model.parentNode.removeChild(model);
        });
    });
});
</script>
<!-- End JS -->

<!-- link -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.min.js"></script>
<script src="/js/calendar.js"></script>
@endsection