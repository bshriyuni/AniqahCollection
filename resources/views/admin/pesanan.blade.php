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
            <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
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
                            <th scope="col">Dewasa</th>
                            <th scope="col">Anak</th>
                            <th scope="col">Tanggal Ambil</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderDetails as $orderDetail)
                        @if ($orderDetail->status != 'Selesai')
                        <tr>
                            <td>{{ $orderDetail->kode_baju }}</td>
                            <td>{{ $orderDetail->nama_pelanggan }}</td>
                            <td>{{ $orderDetail->no_hp }}</td>
                            <td>{{ $orderDetail->dewasa }}</td>
                            <td>{{ $orderDetail->anak }}</td>
                            <td>{{ $orderDetail->tgl_pengambilan }}</td>
                            <td>{{ $orderDetail->tgl_pengembalian }}</td>
                            <td>
                                <div class="btn-group" data-order-detail-id="{{ $orderDetail->id }}">
                                    <form action="{{ route('pesanan.updateStatus', $orderDetail) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="form-select" onchange="this.form.submit()">
                                            <option value="Menunggu Konfirmasi"
                                                {{ $orderDetail->status === 'Menunggu Konfirmasi' ? 'selected' : '' }}>
                                                Menunggu Konfirmasi</option>
                                            <option value="Proses Pengambilan"
                                                {{ $orderDetail->status === 'Proses Pengambilan' ? 'selected' : '' }}>
                                                Proses Pengambilan</option>
                                            <option value="Pesanan Diambil"
                                                {{ $orderDetail->status === 'Pesanan Diambil' ? 'selected' : '' }}>
                                                Pesanan Diambil</option>
                                            <option value="Selesai"
                                                {{ $orderDetail->status === 'Selesai' ? 'selected' : '' }}>Selesai
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
            <h3 class="titleList fw-bold mt-5">Pesanan Selesai</h3>
            <div class="table-wrapper-bottom">
                <table class="table table-bordered table-striped mt-3">
                    <thead class="table">
                        <tr id="table-title">
                            <th scope="col">Kode Baju</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No.HP</th>
                            <th scope="col">Dewasa</th>
                            <th scope="col">Anak</th>
                            <th scope="col">Tanggal Ambil</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($selesai as $orderDetail)
                        <tr>
                            <td>{{ $orderDetail->kode_baju }}</td>
                            <td>{{ $orderDetail->nama_pelanggan }}</td>
                            <td>{{ $orderDetail->no_hp }}</td>
                            <td>{{ $orderDetail->dewasa }}</td>
                            <td>{{ $orderDetail->anak }}</td>
                            <td>{{ $orderDetail->tgl_pengambilan }}</td>
                            <td>{{ $orderDetail->tgl_pengembalian }}</td>
                            <td>{{ $orderDetail->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $selesai->links('pagination::bootstrap-5') }}
        </div>

        <div>
            <p>Keterangan aksi:</p>
            <li>Menunggu Konfirmasi :
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
        </div>
        <div class="logout-button">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>