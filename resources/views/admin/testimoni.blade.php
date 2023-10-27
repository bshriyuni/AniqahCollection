<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Testimoni</title>
    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssuser/admintestimoni.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
    <br>
    <h3 style="color: #0000000; font-family: JockeyOne-Regular; margin-left: 120px; padding:30px;">Masukkan gambar bukti testimoni</h3>
    <div class="container">
        <div class="upload-container" onclick="document.getElementById('fileInput').click();">
            <input type="file" id="fileInput" accept="image/*" onchange="previewImage(event)">
            <div id="imagePreview"></div>
            <!-- <img src="{{ asset('foto/testimoni2.jpeg') }}" alt="No Picture"> -->
            <i class="fas fa-camera fa-8x"></i>

        </div>
    </div>
    <div class="container2">
        <button class="submit-button" id="submitButton" disabled>Submit</button>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.style.backgroundImage = 'url(' + reader.result + ')';
                output.style.backgroundSize = 'cover';
                output.style.backgroundPosition = 'center';
                document.getElementById('submitButton').removeAttribute('disabled');
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>



    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</body>
</html>