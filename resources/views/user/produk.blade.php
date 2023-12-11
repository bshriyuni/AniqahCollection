@extends('layout.main')

@section('title')
Produk
@endsection
@section('container')
<form>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1" style="background-color: #D9D9D9;"><i
                class="fa-solid fa-magnifying-glass"></i></span>
        <input type="text" class="form-control" placeholder="Search in here" aria-label="Username"
            aria-describedby="basic-addon1" style="background-color: #D9D9D9;">
    </div>
</form>
<!-- End Search -->
<div class="container row h-100 mb-5">
    @if(count($topThree) >= 1)
    <div class="col-4 p-4 d-flex flex-column" style="background-color: #BBD6B8;">
        <img src="../foto/{{$topThree[0]->gambar}}" class="img-fluid mb-3" alt="...">
        <a href="product/{{$topThree[0]->kode_baju}}" class="mt-auto mx-auto d-block">
            <button type="button" class="btn btn-light btn-lg">Selengkapnya</button>
        </a>
    </div>
    @endif

    @if(count($topThree) >= 2)
    <div class="col-4 p-4 d-flex flex-column" style="background-color: #D9D9D9;">
        <img src="../foto/{{$topThree[1]->gambar}}" class="img-fluid mb-3" alt="...">
        <a href="product/{{$topThree[1]->kode_baju}}" class="mt-auto mx-auto d-block">
            <button type="button" class="btn btn-light btn-lg">Selengkapnya</button>
        </a>
    </div>
    @endif

    @if(count($topThree) >= 3)
    <div class="col-4 p-4 d-flex flex-column" style="background-color: #BBD6B8;">
        <img src="../foto/{{$topThree[2]->gambar}}" class="img-fluid mb-3" alt="...">
        <a href="product/{{$topThree[2]->kode_baju}}" class="mt-auto mx-auto d-block">
            <button type="button" class="btn btn-light btn-lg">Selengkapnya</button>
        </a>
    </div>
    @endif
</div>

<div class="row align-items-start mb-5">
    <div class="col">
        <hr>
    </div>
    <div class="col">
        <h1>
            <center>Produk Lainnya</center>
        </h1>
    </div>
    <div class="col">
        <hr>
    </div>
</div>

<div class="container text-center mx-auto">
    <div class="row row-gap-3 mb-3">
        @foreach($clothes as $clothing)
        <div class="col col-4">
            <a  href="product/{{$clothing->kode_baju}}">
                <div class="card" style="background-color: #BBD6B8; padding:5px">
                    <div class="card-body" style="text-align :start;">
                        <h4 class="card-title">{{ $clothing->kode_baju }}</h4>
                        <p class="card-text">{{ $clothing->deskripsi }}</p> 
                        <h6>Rp {{$clothing->harga}}</h6>
                        <img src="foto/{{ $clothing->gambar }}" class="rounded mx-auto d-block img-fluid" alt="...">
                    </div>
                </div>
            </a>
            <br><br>
        </div>
        @endforeach
    </div>
    {{ $clothes->links('pagination::bootstrap-5') }}
</div>
@endsection