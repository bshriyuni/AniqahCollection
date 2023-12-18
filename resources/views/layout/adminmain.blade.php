<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/font.css">
    @yield('style')
    <script src="https://kit.fontawesome.com/2f5ba850ff.js" crossorigin="anonymous"></script>
    <style>
    .navbar {
        background-color: #BBD6B8;
    }

    .textAniqah {
        font-family: 'OleoScript-Bold';
        font-size: 64px;
    }

    .deskripsiBrand {
        font-family: 'Inter-Light';
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Brand App -->
    <div class="ps-5 mb-4 pt-2 pe-5 row">
        <div class="col align-middle">
            <p class="textAniqah m-0">Aniqah Collection</p>
            <p class="deskripsiBrand fs-5 fst-italic fw-light m-0">Sewa baju bodo dan jasa jahit baju</p>
        </div>
        <div class="col text-end pe-5 pt-4">
            @yield('icon')
        </div>
    </div>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #BBD6B8; margin-top: 30px; text-align: justify;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0" style="display: flex; justify-content: space-between; width: 100%;">
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/pesanan">Home</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link fw-bold" href="/adminproduct">Produk</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/adminlokasi">Lokasi</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/admintestimoni">Testimoni</a>
                    </li>
                    <li class="nav-item" style="flex: 1; text-align: center; white-space: nowrap; font-size: 20px; font-family: 'Inter-Regular'; color: black;">
                        <a class="nav-link" href="/admincarapemesanan">Cara Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-5">
        @yield('container')
    </div>
    <!-- Footbar -->
    <div class="container-fluid row mx-auto p-4" style="background-color: #BBD6B8;">
        <div class="col ms-5">
            <h3 class="aboutUs">About Us</h3>
            <hr style="border: 2px solid black;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare cursus sed nunc eget dictum Sed
                ornare cursus sed nunc eget dictumd nunc eget dictum Sed ornare cursus sed nunc eget dictum </p>
            <i class="fab fa-instagram fa-2x"></i>
            <i class="fab fa-facebook fa-2x"></i>
            <i class="fab fa-whatsapp fa-2x"></i>
        </div>
        <div class="col">
            <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                style="border: 1px solid black;"></textarea>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>