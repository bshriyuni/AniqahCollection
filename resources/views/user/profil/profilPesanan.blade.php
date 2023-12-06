@extends('user/profil/main')

@section('style')
<link rel="stylesheet" href="css/cssuser/profil.css">
@endsection
@section('edit profil')
    <a href="/profil/edit"><i class="editProfil fas fa-edit">
        Edit Profile
    </i> </a>
@endsection
@section('akun saya')
    <a href="/profil" class="text-decoration-none" style="color: #000;">
        <i class="fas fa-user"> </i>
        Akun Saya
    </a>
@endsection
@section('pesanan saya')
    <a href="/profil/pesanan" class="text-decoration-none" style="color: #E97E67;">
        <i class="fas fa-shopping-cart"></i>
        Pesanan Saya
    </a>
@endsection
@section('container')
    <div class="card" style="margin-right: 30px; background-color: #F7F0F0">
        <div class="card-header" style="background-color: #BBD6B8">
            <p style="font-size: 25px">Riwayat Pesanan</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="container" style="background-color: #F4EEEE; padding:5px;">
                        <img src="foto/baju2.jpg" class="card-img-bottom" alt="..." style="height: 200px;">
                    </div>
                </div>
                <div class="col-9">
                    <h2>Sedang diproses</h2>
                    <h5>A123</h5>
                    <h5>Rp 20.000</h5>
                    <br><br>
                    <button type="submit" class="btn" style="background-color: #E97E67">
                        <a href="/profil/pesanan/detail" class="text-decoration-none text-end" style="color: #000000;">Batalkan Pesanan</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection