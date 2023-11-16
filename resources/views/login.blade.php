<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
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
    
    <!-- Box Login -->
    <div class="row justify-content-center">
        <div class="boxLogin col-md-7">
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <p class="textLogin">Login Admin</p>
            <div class="formLogin">
                <form action="/login" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control custom-input" id="username" autofocus required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control custom-input" id="password" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="offset-sm-10">
                            <button class="btn btn-secondary"><a href="/pesanan"></a>Login</button>
                        </div>
                    </div>
                </form>
                <small class="d-block text-center mt-3"> Register <a href="/register">disini!</a></small>
            </div>
        </div>
    </div>
    <!-- End Box Login -->

    <!-- Skrip JavaScript untuk menutup alert -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var closeButton = document.querySelector('.btn-close');
            var alert = document.querySelector('.alert');

            if (closeButton && alert) {
                closeButton.addEventListener('click', function() {
                    alert.style.display = 'none';
                });
            }
        });
    </script>
    <!-- Link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>