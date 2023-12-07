<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Jahit Baju</title>

    <!-- Link Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/cssadmin/jahitbaju.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- link font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font') }}"> <!-- Ganti 'font.css' dengan nama file CSS Anda -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xHzyrrFJur_ytwYcXT7iC5dUcHj9e5w&callback=initMap" async defer></script>


</head>
<body>
     <!-- Brand App -->
     <div class="brandApp">
        <div class="row align-items-center">
            <div class="col" style="margin-top: -80px; margin-bottom: -60px;">
                <h1 class="textAniqah">Aniqah Collection</h1>
                <h7 class="deskripsiBrand">Sewa baju bodo dan jasa jahit baju</h7>
            </div>

            <!-- tombol edit -->
            <div class="col-1 text-right" style="margin-right:100px;">
                <button type="button" class="btn btn-light" id="plustestimoni" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-plus fa-3x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- end Brand App -->

    <div id="selectedImageNames"></div>

    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" id="closeModal">&times;</span>
                <h2>Aniqah Collection</h2>
            </div>
            <div class="modal-body">
                <!-- Gunakan loop untuk membuat input gambar dan jenis baju -->
                <!-- Tambahkan nomor identifikasi untuk masing-masing input -->
                <div class="image-input">
                    <h4>Masukkan Jenis Baju 1</h4>
                    <input type="text" id="jenisBajuInput1" placeholder="Jenis Baju 1">
                    
                    <h4>Tambah Gambar 1</h4>
                    <label for="gambarInput1" class="custom-file-upload">
                        <i class="fas fa-image"></i> Pilih Gambar 1
                    </label>
                    <input type="file" id="gambarInput1" accept="image/*" style="display: none;">
                </div>

                <div class="image-input">
                    <h4>Masukkan Jenis Baju 2</h4>
                    <input type="text" id="jenisBajuInput2" placeholder="Jenis Baju 2">
                    
                    <h4>Tambah Gambar 2</h4>
                    <label for="gambarInput2" class="custom-file-upload">
                        <i class="fas fa-image"></i> Pilih Gambar 2
                    </label>
                    <input type="file" id="gambarInput2" accept="image/*" style="display: none;">
                </div>

                <div class="image-input">
                    <h4>Masukkan Jenis Baju 3</h4>
                    <input type="text" id="jenisBajuInput3" placeholder="Jenis Baju 3">
                    
                    <h4>Tambah Gambar 3</h4>
                    <label for="gambarInput3" class="custom-file-upload">
                        <i class="fas fa-image"></i> Pilih Gambar 3
                    </label>
                    <input type="file" id="gambarInput3" accept="image/*" style="display: none;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="simpanButton" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript
        document.getElementById("openModalButton").addEventListener("click", function() {
            document.getElementById("myModal").style.display = "block";
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("myModal").style.display = "none";
        });

        document.getElementById("simpanButton").addEventListener("click", function() {
            // Lakukan sesuatu dengan data yang dimasukkan
            // Tutup modal
            document.getElementById("myModal").style.display = "none";
        });

        // Tangani peristiwa pemilihan gambar dan jenis baju untuk masing-masing input
        for (let i = 1; i <= 3; i++) {
            document.getElementById(`gambarInput${i}`).addEventListener("change", function() {
                let selectedImageName = this.files[0].name;
                let selectedImageNameElement = document.getElementById("selectedImageNames");
                selectedImageNameElement.innerHTML = `Gambar yang dipilih ${i}: ${selectedImageName}`;
            });

            document.getElementById(`jenisBajuInput${i}`).addEventListener("input", function() {
                let selectedJenisBaju = this.value;
                console.log(`Jenis Baju ${i}: ${selectedJenisBaju}`);
            });
        }
    </script>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Informasi jenis baju
        $jenisBaju1 = $_POST["jenisBajuInput"];
        $jenisBaju2 = $_POST["jenisBajuInput2"];
        $jenisBaju3 = $_POST["jenisBajuInput3"];

        // Proses unggahan gambar
        for ($i = 1; $i <= 3; $i++) {
            $gambarInputName = "gambarInput$i";

            // Pastikan bahwa file gambar dikirim
            if (isset($_FILES[$gambarInputName]) && $_FILES[$gambarInputName]["error"] == UPLOAD_ERR_OK) {
                $uploadDir = "uploads/"; // Direktori tempat menyimpan gambar
                $uploadFile = $uploadDir . basename($_FILES[$gambarInputName]["name"]);

                // Pindahkan file gambar yang diunggah ke direktori tujuan
                if (move_uploaded_file($_FILES[$gambarInputName]["tmp_name"], $uploadFile)) {
                    // Simpan informasi gambar ke database, sesuai kebutuhan
                    $gambarName = $_FILES[$gambarInputName]["name"];
                    $gambarPath = $uploadDir . $gambarName;

                    // Contoh koneksi dan query untuk menyimpan ke database
                    $koneksi = new mysqli("localhost", "username", "password", "nama_database");

                    if ($koneksi->connect_error) {
                        die("Koneksi database gagal: " . $koneksi->connect_error);
                    }

                    // Gabungkan jenis baju dan informasi gambar dalam satu baris
                    $jenisBaju = ${"jenisBaju$i"};
                    $query = "INSERT INTO tabel_gambar (jenis_baju, nama_file, path_file) 
                            VALUES ('$jenisBaju', '$gambarName', '$gambarPath')";

                    if ($koneksi->query($query) === TRUE) {
                        echo "Gambar berhasil diunggah dan informasinya disimpan di database.";
                    } else {
                        echo "Gagal menyimpan informasi gambar di database: " . $koneksi->error;
                    }

                    $koneksi->close();
                } else {
                    echo "Gagal memindahkan file gambar.";
                }
            } else {
                echo "Terjadi kesalahan saat mengunggah gambar.";
            }
        }
    }
    ?>

    <!-- End Modal -->


    <!-- Menu App -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/crapemesanan">Cara Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="/jahitbaju">Jahit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Menu App -->

    <!-- Halaman Jahit Baju -->
    <div class="halamanJahit">
        <div class="title" style="margin-top: 20px;">
            <h1 class="textTitle">Custom Product</h1>
            <p class="description">Please customize it as you like.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                <div class="card" style="background-color: #DBE4C6; 
                border: 1px solid #ccc; 
                padding: 20px; 
                width: 300px; 
                height: 480px; 
                margin-top: 60px;
                border-top-left-radius: 200px; 
                border-top-right-radius: 200px;">
                    <div class="card-content">
                        <img src="{{ asset('foto/gambar1.png') }}" class="image-1">
                    </div>
                </div>
                <p style="margin-top: 10px; font-family: 'Inter-ExtraBold';">Bridesmaid</p>
            </div>

            <div class="col" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                <div class="card" style="background-color: #BBD6B8; 
                border: 1px solid #ccc; 
                padding: 20px; 
                width: 410px; 
                height: 600px; 
                border-top-left-radius: 200px; 
                border-top-right-radius: 200px;">
                    <div class="card-content">
                        <img src="{{ asset('foto/gambar2.png') }}" class="image-2">
                    </div>
                </div>
                <p style="margin-top: 10px; font-family: 'Inter-ExtraBold';">Graduation</p>
            </div>
        
            <div class="col" style="margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                <div class="card" style="background-color: #D6E8DB; 
                border: 1px solid #ccc; 
                padding: 20px; 
                width: 300px; 
                height: 480px; 
                margin-top: 60px;
                border-top-left-radius: 200px; 
                border-top-right-radius: 200px;">
                    <div class="card-content">
                        <img src="{{ asset('foto/gambar3.png') }}" class="image-3">
                    </div>
                </div>
                <p style="margin-top: 10px; font-family: 'Inter-ExtraBold';">Engagement</p>
            </div>
        
        </div>
    </div>

    <div class="custom-arrows">
        <i class="fas fa-arrow-left" style="font-size: 50px;"></i>
        <i class="fas fa-arrow-right" style="font-size: 50px;"></i>
    </div>

    <div class="order">
        <div class="custom-button" id="openModalButton" onclick="openWhatsAppChat()">
            <p style="font-size: 18px; font-family: 'Inter-ExtraBold'; color: #333; text-align: center; margin-top: 13px;">
                Hubungi Penjual
            </p>
        </div>
    </div>

    <!-- Kode JavaScript untuk membuka chat WhatsApp -->
    <script>
        function openWhatsAppChat() {
            // Ganti nomor telepon sesuai kebutuhan
            var nomorTelepon = "6285299581471";
            
            // Membuat URL chat WhatsApp
            var whatsappURL = "https://api.whatsapp.com/send?phone=" + nomorTelepon;

            // Buka link WhatsApp
            window.open(whatsappURL, "_blank");
        }
    </script>

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
                <button class="buttonAdmin" style="bacground-color:black;">ADMIN</button>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tuliskan ulasanmu disini</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 1px solid black;"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- End Foot Note -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>