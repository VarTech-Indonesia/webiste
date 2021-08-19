@extends('admin/layout/main')
@section('title','VarTech - Login Administration')
@include('admin/layout/menu-admin-non')
@include('admin/layout/menu-admin-non-left')

@section('menu-admin-non-left')
@yield('menu-admin-left')
@endsection('menu-admin-non-left')


@section('main-content')

@section('menu-admin')
@yield('menu-admin-non')
@endsection('menu-admin')

<div class="container">
    <div class="col-md-4 offset-md-4 mt-5">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{route('admin')}}" class="h1"><b>VarTech</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Daftar Akun Admin Baru</p>

                    <form action="{{ route('admin-register-store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            @if(session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <!-- Kesalahan Inputan : -->
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                        <label for="agreeTerms">
                                            Saya Setuju dengan <a href="#">syarat dan ketentuan</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                </div>
                            </div>
                    </form>
                    <a href="{{route('admin-login')}}" class="text-center">Sudah Punya Akun, Silahkan Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('main-content')