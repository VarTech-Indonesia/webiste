@extends('admin/layout/main')
@section('title', $title)
@include('admin/layout/menu-admin-log')
@include('admin/layout/menu-admin-log-left')

@section('menu-admin-log-left')
@yield('menu-admin-left')
@stop

@section('main-content')

@section('menu-admin')
@yield('menu-admin-login')
@stop

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

@if(session('errors'))
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $title_table }}</h3>
    </div>
    <form action="{{ route('user-admin.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Role</label>
            <select id="role_id" class="form-control" name="role_id" style="cursor: pointer" required>
                @foreach ($role as $role_item)
                <option value="{{ $role_item->id }}" >{{$role_item->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama User</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password"  value="{{ old('password') }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Re-Type Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Password" value="{{ old('password_confirmation') }}" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Active" checked>
                    <label class="form-check-label" for="gridRadios1">
                    Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Inactive">
                    <label class="form-check-label" for="gridRadios2">
                    Inactive
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-secondary" onclick=" window.location='{{ route('user-admin.index') }}' ">Kembali</button>
        </div>
        <div class="btn-group btn-group-sm">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>
</div>
@stop