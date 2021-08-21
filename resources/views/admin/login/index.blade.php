@extends('admin/layout/main')
   
@section('title', $title)
@include('admin/layout/menu-admin-top')
@include('admin/layout/menu-admin-left')

@section('menu-admin-top')
    @yield('menu-admin-top')
@stop

@section('main-content')
    @section('menu-admin-left')
        @yield('menu-admin-left')
    @stop
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{route('admin')}}"><img src="{{asset('storage/images-front/vartech.png')}}" width="100px" /></a>
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
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="email" class="form-control" placeholder="Masukan e-mail"  autofocus required>
                                </div>
                            </div>
                            <div class="form-group" id="show_hide_password">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan password" required>
                                    <div class="input-group-text">
                                        <i class="fa fa-eye-slash" aria-hidden="true" onclick="showPassword()" style="cursor:pointer;"></i>
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
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                </div>
                            </div>
                    </form>
                    <p class="mb-1">
                        <a href="#">Lupa Password</a>
                    </p>
                    <p class="mb-0">
                        <!-- <a href="{{}}" class="text-center">Daftar Akun</a> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop

