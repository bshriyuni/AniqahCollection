<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pesanan - ADMIN</title>

        <!-- Link Bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                        <a class="nav-link" href="/adminproduk">Produk</a>
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
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">A234</th>
                            <td>Sisi</td>
                            <td>087753932218</td>
                            <td>1</td>
                            <td>2</td>
                            <td>01/12/2023</td>
                            <td>03/12/2023</td>
                            <td>Proses</td>
                            <td>
                            <!-- Example single danger button -->
                                <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="page navigation">
                <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link" aria-label="Sebelumnya">
                        <span aria-hidden="True">&laquo;</span>
                    </a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link" aria-label="Selanjutnya">
                        <span aria-hidden="True">&raquo;</span>
                    </a></li>
                </ul>
            </nav>
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
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">A234</th>
                            <td>Sisi</td>
                            <td>087753932218</td>
                            <td>1</td>
                            <td>2</td>
                            <td>01/12/2023</td>
                            <td>03/12/2023</td>
                            <td>On-Process</td>
                            <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="" method="post">
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="page navigation">
                <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link" aria-label="Sebelumnya">
                        <span aria-hidden="True">&laquo;</span>
                    </a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link" aria-label="Selanjutnya">
                        <span aria-hidden="True">&raquo;</span>
                    </a></li>
                </ul>
            </nav>
        </div>
        <div class="logout-button">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
    

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>