<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Pemesanan</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssadmin/carapemesanan.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>


</head>
<body>
<!-- Brand App -->
<div class="row brandApp">
            <div class="col-md-11 col-12 Aniqah" style="margin-top: -30px; margin-bottom: -40px;">
                <h1 class="textAniqah">Aniqah Collection</h1>
                <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
            </div>
            <div class="col-md-1 col-12" style="text-align: right;">
                <button id="editButton" type="button" class="btn btn-light" data-toggle="modal" data-target="#editModal" style="margin-right: -20px;">
                    <i class="fas fa-pencil-alt fa-2x"></i>
                </button>
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
                        <a class="nav-link fw-bold" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/carapemesanan">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahitbaju">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Tata Cara Pemesanan -->
    <div class="container">
        <div class="judul text-center py-4">
            <h1>TATA CARA PEMESANAN</h1>
        </div>

        <div class="row">
            <div class="col-md-6 custom-card">
                <div class="row">
                    <div class="col-8">
                        <p class="custom-text" id="step1">{{ $dataTerbaru->step1 }}</p>
                    </div>
                    <div class="col-4">
                        <div class="rounded-card"  style="margin-bottom: 30px;" >
                            <i class="fa-solid fa-lightbulb fa-4x" style="color: #fffafa;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="step ">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #526754">01</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="step" style="margin-left:450px;">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #526754">02</p>
                </div>
            </div>

            <div class="col-md-6 custom-card2">
                <div class="row">
                    <div class="col-8">
                        <p class="custom-text" id="step2">{{ $dataTerbaru->step2 }}</p>
                    </div>
                    <div class="col-4">
                        <div class="rounded-card" style="padding: 30px;">
                            <i class="fa-solid fa-address-book fa-3x" style="color: #fffafa;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 custom-card3">
                <div class="row">
                    <div class="col-8">
                        <p class="custom-text" id="step3" style="padding: 10px;">{{ $dataTerbaru->step3 }}</p>
                    </div>
                    <div class="col-4">
                        <div class="rounded-card" style="padding: 30px;">
                        <i class="fa-solid fa-dollar-sign fa-3x" style="color: #fffafa;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="step">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #526754">03</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="step"style="margin-left:450px;">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #526754">04</p>
                </div>
            </div>

            <div class="col-md-6 custom-card4">
                <div class="row">
                    <div class="col-8">
                        <p class="custom-text" id="step4" style="padding: 10px;" >{{ $dataTerbaru->step4 }}</p>
                    </div>
                    <div class="col-4">
                        <div class="rounded-card" style="padding: 30px;" >
                            <i class="fa-solid fa-thumbs-up fa-3x" style="color: #fffafa;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 custom-card5">
                <div class="row">
                    <div class="col-8">
                        <p class="custom-text" id="step5">{{ $dataTerbaru->step5 }}</p>
                    </div>
                    <div class="col-4">
                        <div class="rounded-card"  style="padding: 30px;" >
                            <i class="fa-solid fa-cart-shopping fa-3x" style="color: #fffafa;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="step">
                    <p style="color: #526754">STEP</p>
                    <p style="color: #526754">05</p>
                </div>
            </div>
        </div>
       

    </div>
    <!-- End Tata Cara Pemesanan -->

  <!-- Modal Form-->
  <div class="modal fade" id="addtesti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Cara Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit di Sini -->
                    <form action="/admincarapemesanan" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Edit Step 1</label>
                            <div class="col-sm-9">
                                <input type="text" name="step1" class="form-control custom-input" id="step1Input" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Edit Step 2</label>
                            <div class="col-sm-9">
                                <input type="text" name="step2" class="form-control custom-input" id="step2Input" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Edit Step 3</label>
                            <div class="col-sm-9">
                                <input type="text" name="step3" class="form-control custom-input" id="step3Input" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Edit Step 4</label>
                            <div class="col-sm-9">
                                <input type="text" name="step4" class="form-control custom-input" id="step4Input" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Edit Step 5</label>
                            <div class="col-sm-9">
                                <input type="text" name="step5" class="form-control custom-input" id="step5Input" required>
                            </div>
                        </div>

                          <!-- Tempatkan elemen yang akan menampilkan nilai yang diubah di sini -->
                            <!-- <div id="step1Display"></div> -->
                           

                            <!-- Button Submit -->
                            <button type="button" style="margin-left: 650px;" class="btn btn-success" id="submit">Submit</button>
                            </div>
                        </div>
                           
                    </form>
                    
            </div>  
        </div>
    </div>
    <!-- End Modal Form-->

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
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid black;"></textarea>
                    <button class="btn-send mt-3">Send</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Foot Note -->

     

    <!-- JS -->
    <script>
           
            document.addEventListener("DOMContentLoaded", function() {
            var editButton = document.getElementById('editButton');
            var closeButton = document.querySelector('.btn-close');
            var submitButton = document.getElementById('submit');


            // Event listener untuk tombol "Submit"
            submitButton.addEventListener('click', function () {
            // Mendapatkan nilai yang diubah pada modal
            var editedStep1 = document.getElementById('step1Input').value;
            var editedStep2 = document.getElementById('step2Input').value;
            var editedStep3 = document.getElementById('step3Input').value;
            var editedStep4 = document.getElementById('step4Input').value;
            var editedStep5 = document.getElementById('step5Input').value;


            // Menampilkan nilai yang diubah di tampilan
            document.getElementById('step1').textContent = editedStep1;
            document.getElementById('step2').textContent = editedStep2;
            document.getElementById('step3').textContent = editedStep3;
            document.getElementById('step4').textContent = editedStep4;
            document.getElementById('step5').textContent = editedStep5;
            
            // Menutup modal saat selesai
            $('#addtesti').modal('hide');
        });
        

             // Menambahkan event listener untuk menampilkan modal pemesanan saat tombol "Submit" ditekan
            editButton.addEventListener('click', function () {
                 // Mendapatkan teks dari card untuk setiap langkah
            var step1Text = document.getElementById('step1').textContent;
            var step2Text = document.getElementById('step2').textContent;
            var step3Text = document.getElementById('step3').textContent;
            var step4Text = document.getElementById('step4').textContent;
            var step5Text = document.getElementById('step5').textContent;

            // Mendapatkan input dalam modal untuk setiap langkah
            var step1Input = document.getElementById('step1Input');
            var step2Input = document.getElementById('step2Input');
            var step3Input = document.getElementById('step3Input');
            var step4Input = document.getElementById('step4Input');
            var step5Input = document.getElementById('step5Input');

            // Mengatur nilai input dengan teks dari card
            step1Input.value = step1Text;
            step2Input.value = step2Text;
            step3Input.value = step3Text;
            step4Input.value = step4Text;
            step5Input.value = step5Text;


                // resetInputValues(); // Mengatur ulang nilai inputan pada modal
                $('#addtesti').modal('show'); // Menampilkan modal
            });

            // Menutup modal saat tombol close (icon "X") ditekan
            closeButton.addEventListener('click', function () {
                // resetInputValues(); // Mengatur ulang nilai inputan pada modal saat modal ditutup
                $('#addtesti').modal('hide'); // Menyembunyikan modal
            });
        });
    </script>
    <!-- End JS -->

    <!-- link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</body>
</body>
</html>



