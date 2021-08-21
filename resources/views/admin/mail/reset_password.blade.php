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
                <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    {{ $error }}
                </div>
                @endif
                @if(session('errors'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
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
                <form action="{{route('reset.password.post')}}" method="post">
                    @csrf
                    @method('post')
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                        </div>
                    </div>
                </form>
                <p class="mt-3 mb-1"><a href="{{route('admin-login')}}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
@stop

