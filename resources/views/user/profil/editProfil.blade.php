@extends('user/profil/main')

@section('edit profil')
    <a href="/profil/edit"><i class="editProfil fas fa-edit" style="color: #E97E67;">
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
    <a href="/profil/pesanan" class="text-decoration-none" style="color: #000000;">
        <i class="fas fa-shopping-cart"></i>
        Pesanan Saya
    </a>
@endsection
@section('container')
    <!--  Edit Profil Saya -->
    <div class="profilSaya">
        <p style="font-size: 30px">Profil Saya</p>
        <P>Kelola informasi profil anda untuk mengontrol, melindungi dan mengamankan akun</P>
        <hr style="border: 1px solid black;">
    </div>
    <div class="profil" style="display: flex; justify-content: space-between; width: 100%; margin: 0 auto;">
        <div class="left" style="flex-basis: 60%; margin-left: px; margin-top: 30px;">
            <form style="margin-right: 20px" method="post" action="{{ route('profil.update') }}">
                @csrf
                <div class="row mb-3">
                    <label for="inputUsername" class="col-sm-4 col-form-label text-end">Username</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="username" name="username" value="{{ $username }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNama" class="col-sm-4 col-form-label text-end">Nama</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputNama" name="nama" value="{{ $name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-4 col-form-label text-end">Email</label>
                    <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $email }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-4 col-form-label text-end">Password</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" name="password" value="{{ $password }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNo" class="col-sm-4 col-form-label text-end">Nomor Telepon</label>
                    <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputNo" name="noTlp" value="{{ $notlp }}">
                    </div>
                </div>
                <br><br>
                <div style="margin-top: 20px;" class="text-center align-items-center">
                    <button type="submit" class="btn" style="background-color: #618264">Simpan Perubahan</button>
                </div>
            </form>
        </div>

        <!-- Script Modal Alert -->
        <script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '{{ session('success') }}'
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('error') }}'
                });
            @endif
        </script>
        <!-- End Script Modal Alert -->
        
        <div class="vertical" style="border-left: 2px solid #D9D9D9; height: 850px; margin-top: 20px; margin-bottom: 20px;"></div>
        <div class="right" style="flex-basis: 40%; margin-left: 30px; margin-top: 30px;">
        <div class="d-flex flex-column align-items-center text-center">
                <div class="profile-circle" style="width: 100px;height: 100px; background-color: #D6B8D5; border-radius: 50%; justify-content: center; align-items: center;">
                    <span class="profile-icon" style="font-size: 60px;">&#128103;</span>
                </div>
                <div class="username mt-2">
                    @if($username)
                        <div>
                            <p>{{ $username }}</p>
                            <p>Bergabung sejak {{ $created_at}}</p>
                            <br>
                            <form action="/logout" method="post" class="d-inline">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #E97E67">Logout</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End  Edit Profil Saya -->
@endsection