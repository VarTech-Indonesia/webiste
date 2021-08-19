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
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <form action="{{ route('user-admin.update', $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Role</label>
            <select id="role_id" class="form-control" name="role_id" style="cursor: pointer" required>
                @foreach ($role as $role)
                <option value="{{ $role->id }}" {{ $role->id == $data->role_id ? 'selected' : '' }}>{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama User</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $data->name) }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $data->email) }}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="hidden" name="hidden_password" value="{{ $data->password }}" >
            <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ada perubahan"  value="{{ old('password') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Re-Type Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Kosongkan jika tidak ada perubahan"" value="{{ old('password_confirmation') }}">
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Active" {{ $data->status == 'Active' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios1">
                    Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Inactive" {{ $data->status == 'Inactive' ? 'checked' : '' }}>
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