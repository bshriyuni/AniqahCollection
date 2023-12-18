@extends('layout.adminmain')

@section('title')
Produk
@endsection
@section('icon')
<button id="editButton" type="button" class="btn btn-light" data-toggle="modal" data-target="#addModal">
    <i class="fas fa-plus fa-3x"></i>
</button>
@endsection
@section('container')
<!-- produk -->
<div class="container text-center">
    <div class="row row-gap-3 mb-3">
        @foreach($clothes as $clothing)
        <div class="col-4">
            <div class="card h-100" style="background-color: #BBD6B8; padding:5px">
                <div class="card-body">
                    <h4 class="card-title">{{ $clothing->kode_baju }}</h4>
                    <p class="card-text">{{ $clothing->deskripsi }}</p>
                    <h6>Rp {{$clothing->harga}}</h6>
                    <img src="{{ asset('foto/' .  $clothing->gambar) }}" class="card-img-bottom" alt="...">
                </div>
                <div class="card-footer">
                    <form id="delete-form-{{ $clothing->id }}" action="{{ route('produk.delete', $clothing->id) }}"
                        method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <a class="btn" onclick="confirmDelete( {{ $clothing->id }} );">
                        <i class="fas fa-trash text-danger"></i>
                    </a>
                    <a class="btn edit-btn" data-bs-toggle="modal" data-bs-target="#modal-edit"
                        data-kodebaju="{{ $clothing->id }}">
                        <i class="fas fa-edit text-info"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- pagination -->
        {{$clothes->links('pagination::bootstrap-5')}}
    </div>
</div>
<!-- End Produk -->

<!-- Modal Edit Produk-->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #BBD6B8">
                <h5 class="modal-title" id="exampleModalLabel">Aniqah Collection</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
                    style="margin-right:10px;"></button>
            </div>
            <div class="modal-body">
                <!-- Isi di sini -->
                <h3 class="h3Lokasi">Edit Produk</h3>
                <form class="mx-auto" style="max-width: 700px;" action="/edit/{id}" method="post"
                    enctype="multipart/form-data" id="editForm">
                    @csrf
                    <div class="mb-3 row">
                        <label for="kodeBaju" class="col-sm-3 col-form-label">Kode Baju</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kodeBaju" name="kodeBaju" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDeskripsi" class=" col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control summernote" id="deskripsi" name="deskripsi"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputFoto" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" id="foto" accept="image/*" name="gambar"
                                onchange="previewEditImage(event)">
                            <div id="editGambar">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDewasa" class="col-sm-3 col-form-label">Jumlah Dewasa</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" id="stok" name="stok">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputS&K" class=" col-sm-3 col-form-label">Syarat & Ketentuan</label>
                        <div class="col-sm-9">
                            <textarea class="form-control summernote" id="syaratKetentuan" name="syaratKetentuan"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputHarga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="offset-sm-10">
                            <button type="submit" class="btn btn-success" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Edit Produk-->
<!-- Modal Add Produk-->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #BBD6B8">
                <h5 class="modal-title" id="addModalLabel">Aniqah Collection</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
                    style="margin-right:10px;"></button>
            </div>
            <div class="modal-body">
                <!-- Isi di sini -->
                <h3 class="h3Lokasi">Tambahkan Produk</h3>
                <form class="mx-auto" style="max-width: 700px;" action="/adminproduct" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="kodeBaju" class="col-sm-3 col-form-label">Kode Baju</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kodeBaju" name="kodeBaju" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDeskripsi" class=" col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control summernote" id="deskripsi" name="deskripsi"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputFoto" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" id="foto" accept="image/*" name="gambar"
                                onchange="previewImage(event)">
                            <div id="imagePreview"></div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDewasa" class="col-sm-3 col-form-label">Stock</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" id="stok" name="stok">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputS&K" class=" col-sm-3 col-form-label">Syarat & Ketentuan</label>
                        <div class="col-sm-9">
                            <textarea class="form-control summernote" id="syaratKetentuan" name="syaratKetentuan"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputHarga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="offset-sm-10">
                            <button type="submit" class="btn btn-success" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Add Produk-->

<!-- Modal Alert -->
<!-- Modal untuk pesan berhasil -->
<div class="modal" id="successModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <i class="fas fa-check-circle fa-5x" style="color: #28a745;"></i>
                <p class="mt-3">Produk Berhasil Ditambahkan</p>
            </div>
        </div>
    </div>
</div>
<!-- End Modal untuk pesan berhasil -->

<!-- Modal untuk pesan gagal -->
<div class="modal" id="errorModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <i class="fas fa-times-circle fa-5x" style="color: #dc3545;"></i>
                <p class="mt-3">Gagal menambahkan produk</p>
            </div>
        </div>
    </div>
</div>
<!-- End Modal untuk pesan gagal -->


<!-- End Script Modal Alert -->
<!-- End Modal Alert -->
<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('imagePreview');
        output.innerHTML = '<img src="' + reader.result + '" width="100%" height="100%" />';
    };
    reader.readAsDataURL(event.target.files[0]);
}

function previewEditImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('editGambar');
        output.innerHTML = '<img src="' + reader.result + '" width="100%" height="100%" />';
    };
    reader.readAsDataURL(event.target.files[0]);
}

function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this data?')) {
        event.preventDefault();
        document.getElementById('delete-form-' + id).submit();
    }
}
document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const kodeBaju = this.getAttribute('data-kodebaju');

        // Fetch data for the specific kode_baju via AJAX
        fetch(/getClothingData/${kodeBaju})
            .then(response => response.json())
            .then(data => {
                // Populate form fields with fetched data
                document.getElementById('editForm').action = "../editClothingData/" + data.id;
                document.getElementById('kodeBaju').value = data.kode_baju;
                document.getElementById('deskripsi').value = data.deskripsi;
                document.getElementById('stok').value = data.stok;
                document.getElementById('syaratKetentuan').value = data.syarat_ketentuan;
                document.getElementById('harga').value = data.harga;
                document.getElementById('editGambar').innerHTML = '<img src="../foto/' + data
                    .gambar + '" width="100%" height="100%" />';
                // Populate other form fields similarly with retrieved data
            })
            .catch(error => console.error('Error:', error));
    });
});
</script>
@endsection