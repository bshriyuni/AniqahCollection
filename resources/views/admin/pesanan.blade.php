<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pesanan - ADMIN</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssadmin/adminpesanan.css">
    <!-- link font awesome -->
    <script src="https://kit.fontawesome.com/034fd836ff.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->

    <!-- Menggunakan Bootstrap 5.2.2 JavaScript dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Brand App -->
    <div class="brandApp">
        <div class="Aniqah" style="margin-top: 20px;">
            <h1 class="textAniqah">Aniqah Collection</h1>
            <h7 class="deskripsiBrand">Tempat Penyewaan Baju Bodo</h7>
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
                        <a class="nav-link fw-bold" href="/pesanan">Pesanan</a>
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
                        <a class="nav-link" href="/admincarapemesanan">Cara Pemesanan</a>
                    </li>
                   </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Table List Pesanan -->
    <div class="wrapper p-5">
        <div class="container-top">
            <h3 class="titleList fw-bold">List Pesanan</h3>
            <div class="table-wrapper-top">
                <table class="table table-bordered table-striped mt-3">
                    <thead id="table-title">
                        <tr>
                            <th scope="col">Kode Baju</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No.HP</th>
                            <th scope="col">Alamat</th> 
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Tgl Ambil</th>
                            <th scope="col">Tgl Kembali</th>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderDetails as $orderDetail)
                        @if ($orderDetail->status != 'Selesai' && $orderDetail->status != 'Dibatalkan')
                        <tr>
                            <td>{{ $orderDetail->kode_baju }}</td>
                            <td>{{ $orderDetail->nama_lengkap }}</td>
                            <td>{{ $orderDetail->no_hp }}</td>
                            <td>{{ $orderDetail->alamat }}</td>
                            <td>{{ $orderDetail->jumlah_pesanan }}</td>
                            <td>{{ $orderDetail->total_harga}}</td>
                            <td>{{ $orderDetail->tgl_pengambilan }}</td>
                            <td>{{ $orderDetail->tgl_pengembalian }}</td>
                            <td>
                                <button id="editButton" type="button" class="btn" style="background-color: transparent" data-toggle="modal" data-target="#paymentModal{{ $orderDetail->id }}">
                                {{ $orderDetail->pembayaran }}
                                </button>
                            </td>
                            <!-- Modal Bukti Pembayaran-->
                            @if(isset($orderDetail))
                            <div class="modal fade" id="paymentModal{{ $orderDetail->id }}" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="paymentModalLabel">Bukti Pembayaran</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
                                                    style="margin-right:10px;">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container" style="background-color: #F4EEEE; padding:5px;">
                                                    <img src="{{ asset('foto/' .  $orderDetail->bukti_pembayaran) }}" class="card-img-bottom" alt="..." style="height: 100%;">
                                                </div>
                                                <br>
                                                <p>Total Pembayaran: {{ $orderDetail->total_harga}}</p>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- End Modal Bukti Pembayaran -->
                            <td>
                                <div class="btn-group" data-order-detail-id="{{ $orderDetail->id }}">
                                    <form action="{{ route('pesanan.updateStatus', $orderDetail) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="form-select" onchange="this.form.submit()">
                                            <option value="Booked"
                                                {{ $orderDetail->status === 'Booked' ? 'selected' : '' }}>
                                                Booked</option>
                                            <option value="Diambil"
                                                {{ $orderDetail->status === 'Diambil' ? 'selected' : '' }}>
                                                Diambil</option>
                                            <option value="Selesai"
                                                {{ $orderDetail->status === 'Selesai' ? 'selected' : '' }}>
                                                Selesai</option>
                                            <option value="Pesanan Dibatalkan"
                                                {{ $orderDetail->status === 'Pesanan Dibatalkan' ? 'selected' : '' }}>Pesanan Dibatalkan
                                            </option>
                                            <option value="Dibatalkan"
                                                {{ $orderDetail->status === 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan
                                            </option>
                                        </select>
                                        
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $orderDetails->links('pagination::bootstrap-5') }}
        </div>

        <div class="container-bottom">
            <h3 class="titleList fw-bold mt-5">Riwayat Pesanan</h3>
            <div class="table-wrapper-bottom">
                <table class="table table-bordered table-striped mt-3">
                    <thead class="table">
                        <tr id="table-title">
                            <th scope="col">Kode Baju</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No.HP</th>
                            <th scope="col">Alamat</th> 
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Tgl Ambil</th>
                            <th scope="col">Tgl Kembali</th>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($selesai as $orderDetail)
                        <tr>
                            <td>{{ $orderDetail->kode_baju }}</td>
                            <td>{{ $orderDetail->nama_lengkap }}</td>
                            <td>{{ $orderDetail->no_hp }}</td>
                            <td>{{ $orderDetail->alamat }}</td>
                            <td>{{ $orderDetail->jumlah_pesanan }}</td>
                            <td>{{ $orderDetail->total_harga}}</td>
                            <td>{{ $orderDetail->tgl_pengambilan }}</td>
                            <td>{{ $orderDetail->tgl_pengembalian }}</td>
                            <td>{{ $orderDetail->pembayaran }}</td>
                            <td>{{ $orderDetail->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $selesai->links('pagination::bootstrap-5') }}
        </div>

        <!-- <div>
            <p>Keterangan aksi:</p>
            <li>Booked :
                Form yang telah diisi oleh customer telah diterima datanya dan masuk ke list pesanan, yang selanjunya
                admin akan menghubungi customer untuk mengonfirmasi pesanannya
            </li>
            <li>Proses Pengambilan :
                Pesanan telah dikonfirmasi oleh customer dan sisa dilakukan pengambilan barang dan pembayaran
            </li>
            <li>Pesanan Diambil :
                Pembayaran telah dilakukan dan customer sudah mengambil barang yang kemudian akan menunggu pengembalian
                pada waktu yang telah disepakati
            </li>
        </div> -->
        <div class="logout-button">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>


    <!-- link -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>