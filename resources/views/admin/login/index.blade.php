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
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('admin')}}" class="h1"><b>VarTech</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{ route('admin-login-proses') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Kesalahan Masukan :
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
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
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
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                </form>
                <p class="mb-1">
                    <a href="#">Lupa Password</a>
                </p>
                <p class="mb-0">
                    <!-- <a href="{{route('admin-register-create')}}" class="text-center">Daftar Akun</a> -->
                </p>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

</div>
@endsection('main-content')