@extends('layout.main')

@section('title')
Produk
@endsection
@section('style')
<script src="https://kit.fontawesome.com/2f5ba850ff.js" crossorigin="anonymous"></script>
@endsection
@section('container')
<!-- Detail Produk -->
<div class="">
    <div class="row">
        <!-- Produk -->
        <div class="col-md-6">
            <div class="produk">
                <div class="card" style="width: 100%">
                    <img src="../foto/{{ $produk->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="kodeBaju">{{$produk->kode_baju}}</h4>
                        <p class="desBaju">{{$produk->deskripsi}}</p>
                        <p><b>Sisa Stock : {{$produk->jumlah_dewasa}}</b></p>
                        <h4 class="harga">Rp {{$produk->harga}}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kedua -->
        <div class="col-md-6">
            <!-- Kalender -->
            <div class="container" style="background-color: #F4EEEE; color: #000000;" id="main">
                <div class="carousel slide">
                    <h1 class="text-center">
                        <a id="left"><i class="fa fa-chevron-left"></i></a>
                        <span>&nbsp;</span>
                        <span id="month"></span>
                        <span>&nbsp;</span>
                        <span id="year"></span>
                        <span>&nbsp;</span>
                        <a id="right">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </h1>
                </div>
                <div class="row">
                    <div>
                        <div class="container p-1 w-100 table"></div>
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
                    <div class="card p-4" style="background-color: #F4EEEE; color: #000000;">
                        <h5 class="sk">Syarat & Ketentuan</h5>
                        <p>{{$produk->syarat_ketentuan}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Detail Produk -->

<!-- Tombol Booking -->
<button type="button" class="btn btn-block w-100 btn-outline-0 mt-4" style="background-color: #BBD6B8;"
    data-bs-toggle="modal" data-bs-target="#bookingModal">Booking Sekarang</button>
<!-- End Tombol Booking -->
<form method="POST" action="/product/create">
    @csrf
    <!-- Modal Form-->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Form Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi formulir booking di sini -->
                    <div id="errorMessage" style="display: none;" class="alert alert-danger alert-dismissible fade show"
                        role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control custom-input" id="inputName" name="nama" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNoTelpon" class="col-sm-3 col-form-label">No Telpon</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control custom-input" name="no_telp" id="inputNoTelpon"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputKodeBaju" class="col-sm-3 col-form-label">Kode Baju</label>
                        <div class="col-sm-9">
                            <div class="input-group" id="modelLain">
                                <input type="text" class="forAdd form-control custom-input" name="kode_baju"
                                    id="inputKodeBaju" value="{{ $produk->kode_baju }}" readonly>
                                <input type="number" class="forAdd form-control custom-input" name="dewasa"
                                    id="inputJumlahDewasa" min="1" max="{{ $produk->jumlah_dewasa }}"
                                    placeholder="Jumlah Barang" required>
                                <input type="number" class="forAdd form-control custom-input" name="harga"
                                    id="HargaInput" placeholder="Harga" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTglPengambilan" class="col-sm-3 col-form-label">Tgl Pengambilan</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control custom-input" name="tanggal_Pengambilan"
                                id="inputTglPengambilan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTglPengembalian" class="col-sm-3 col-form-label">Tgl Pengembalian</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control custom-input" name="tanggal_Pengembalian"
                                id="inputTglPengembalian" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Pembayaran</label>
                        <div class="form-check col-2">
                            <input class="form-check-input" type="radio" name="pembayaran" id="tunai" value="Tunai">
                            <label class="form-check-label" for="tunai">
                                Tunai
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="pembayaran" id="nonTunai"
                                value="Non-Tunai">
                            <label class="form-check-label" for="nonTunai">
                                Non-Tunai
                            </label>
                            <p class="bg-secondary text-white p-2 ps-4" id="textTunai">
                                Bank Mandiri (An.Adelia Puspita Hilal) <br>
                                1740006333819 <br>
                                <br>
                                Bank BNi (An.Adelia Puspita Hilal) <br>
                                0276432481 <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="note">Note: Pengambilan dan pengembalian baju diberlakukan maximal 2 hari. jika melewati
                        batas
                        tersebut maka akan dikenakan biaya denda sesuai s&k yang berlaku</p>
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal" data-bs-target="#confirmModal"
                        data-bs-toggle="modal" id="confirmButton">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Form-->

    <!-- Modal Submit -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Pesanan</h5>
                </div>
                <div class="modal-body">
                    <div class="row mb-3" style="margin-top: 30px;">
                        <p class="col-sm-5">Nama Lengkap</p>
                        <p class="nama col-sm-7" id="namaLengkap"></p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Nomor Telpon</p>
                        <p class="nama col-sm-7" id="nomorTelpon"></p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Kode Baju</p>
                        <p class="nama col-sm-2" id="kodeBaju">{{ $produk->kode_baju }}</p>
                        <p class="nama col-sm-3">Dewasa: <span id="dewasa"></span></p>
                        <p class="nama col-sm-2">harga: <span id="harga"></span></p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Tanggal Pengambilan</p>
                        <p class="nama col-sm-7" id="tglAmbil"></p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Tanggal Pengembalian</p>
                        <p class="nama col-sm-7" id="tglKembali"></p>
                    </div>
                    <div class="row mb-3">
                        <p class="col-sm-5">Pembayaran</p>
                        <p class="nama col-sm-7" id="pembayaran"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="note">Note: Pengambilan dan pengembalian baju diberlakukan maximal 2 hari. jika melewati
                        batas
                        tersebut maka akan dikenakan biaya denda sesuai s&k yang berlaku</p>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"
                        id="cancelButton">Batalkan</button>
                    <button type="submit" class="btn btn-success" id="btnKonfirmasi">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Submin -->
</form>
<!-- link -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
var produk = @json($produk);
$(document).ready(function() {
    $('#textTunai').hide();
    $('input[type=radio][name=pembayaran]').change(function() {
        if (this.id === 'tunai') {
            $('#pembayaran').text('Tunai');
            $('#textTunai').hide();

        } else if (this.id === 'nonTunai') {
            $('#textTunai').show();
            $('#pembayaran').text('Non-Tunai');
        }
    });
    $('#inputName').on('input', function() {
        $('#namaLengkap').text($(this).val());
    });
    $('#inputNoTelpon').on('input', function() {
        $('#nomorTelpon').text($(this).val());
    });
    $('#inputJumlahDewasa').on('input', function() {
        $('#dewasa').text($(this).val());
        var jumlahDewasa = $(this).val();

        var hargaPerBarang = parseInt(produk['harga'].replace(/\D/g, ''));
        var totalHarga = jumlahDewasa * hargaPerBarang;

        $('#HargaInput').val(totalHarga);
        $('#harga').text(totalHarga);
    });
    $('#inputTglPengembalian').on('input', function() {
        $('#tglKembali').text($(this).val());
    });
    $('#inputTglPengambilan').on('input', function() {
        $('#tglAmbil').text($(this).val());
    });
});
document.getElementById('confirmButton').addEventListener('click', function() {
    $('#bookingModal').modal('hide');
    $('#confirmModal').modal('show');
});

// When "Batalkan" (Cancel) button in the second modal is clicked, hide the second modal and show the first modal
document.getElementById('cancelButton').addEventListener('click', function() {
    $('#confirmModal').modal('hide');
    $('#bookingModal').modal('show');
});
var order_detail = @json($order_details);
currentDate = new Date();
tgl_ambil = []
tgl_kembali = []
order_detail.forEach(element => {
    tgl_ambil.push(element['tgl_pengambilan'])
    tgl_kembali.push(element['tgl_pengembalian'])
});
$(document).ready(function() {
    var currentDate = new Date();

    function generateCalendar(d) {
        createdDate = new Date(d);

        function monthDays(month, year) {
            var result = [];
            var days = new Date(year, month, 0).getDate();
            for (var i = 1; i <= days; i++) {
                result.push(i);
            }
            console.log(result)
            return result;
        }
        Date.prototype.monthDays = function() {
            var d = new Date(this.getFullYear(), this.getMonth() + 1, 0);
            return d.getDate();
        };
        var details = { // totalDays: monthDays(d.getMonth(), d.getFullYear()),
            totalDays: d.monthDays(),
            weekDays: [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ],
            months: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ]
        };
        var start = new Date(d.getFullYear(), d.getMonth()).getDay();
        var cal = [];
        var day = 1;
        for (var i = 0; i <= 6; i++) {
            cal.push(["<div class='row text-center mt-2 mb-2'>"]);
            for (var j = 0; j < 7; j++) {
                if (i === 0) {
                    cal[i].push("<div class='col'>" + details.weekDays[j] + "</div>");
                } else if (day > details.totalDays) {
                    cal[i].push("<div class='col'>&nbsp;</div>");
                } else {
                    if (i === 1 && j < start) {
                        cal[i].push("<div class='col'>&nbsp;</div>");
                    } else {
                        createdDate.setDate(day)
                        createdDate.setHours(0)
                        var currentDate = new Date();
                        let currentDateCollision = false
                        for (let k = 0; k < tgl_ambil.length; k++) {
                            ambil = new Date(tgl_ambil[k])
                            kembali = new Date(tgl_kembali[k])
                            ambil.setHours(0)
                            kembali.setHours(23)
                            if (createdDate >= ambil && createdDate <= kembali) {
                                currentDateCollision = true;
                                break; // Exit loop if collision found
                            }
                        }
                        if (currentDate >= createdDate) {
                            cal[i].push(
                                '<div class="col"><div class="rounded-circle mx-auto text-bg-secondary" style="height: 45px !important; width: 45px !important;">' +
                                day++
                                + "</div></div>");
                        } else if (currentDateCollision) {
                            cal[i].push(
                                '<div class="col"><div class="rounded-circle mx-auto" style="height: 45px !important; width: 45px !important; background-color: #DF7B7B;">' +
                                day++ +
                                "</div></div>");
                        } else {
                            cal[i].push(
                                '<div class="col"><div class="rounded-circle mx-auto" style="height: 45px !important; width: 45px !important; background-color: #98DB9F;">' +
                                day++ +
                                "</div></div>");
                        }
                    }
                }
            }
            cal[i].push("</div>");
        }
        cal = cal.reduce(function(a, b) {
            return a.concat(b);
        }, []).join("");
        $(".table").append(cal);
        $("#month").text(details.months[d.getMonth()]);
        $("#year").text(d.getFullYear());
        $("td.day").mouseover(function() {
            $(this).addClass("hover");
        }).mouseout(function() {
            $(this).removeClass("hover");
        });
    }
    $("#left").click(function() {
        $(".table").text("");
        if (currentDate.getMonth() === 0) {
            currentDate = new Date(currentDate.getFullYear() - 1, 11);
            generateCalendar(currentDate);
        } else {
            currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1);
            generateCalendar(currentDate);
        }
    });
    $("#right").click(function() {
        $(".table").html("<tr></tr>");
        if (currentDate.getMonth() === 11) {
            currentDate = new Date(currentDate.getFullYear() + 1, 0);
            generateCalendar(currentDate);
        } else {
            currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1);
            generateCalendar(currentDate);
        }
    });
    generateCalendar(currentDate);
});
</script>
@endsection