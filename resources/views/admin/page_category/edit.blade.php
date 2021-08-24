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

    {{-- @if(session('error'))
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 100000
            });
            toastr.error("{{ $error }}")
        });
    </script>
    @endif
    <script>
    </script> --}}

    {{-- @if(session('errors'))
        @foreach ($errors->all() as $error)
        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 100000
                });
                toastr.error("{{ $error }}")
            });
        </script>
        @endforeach
    @endif --}}
    <div class="card card-lightblue">
        <div class="card-header">
            <h3 class="card-title">{{ $title_table }}</h3>
        </div>
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
        <form action="{{ route('user-admin.update',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="card-body">
            <div class="form-group">
                <label>Role</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-cogs"></i></span>
                    </div>
                    <select id="id_role" class="form-control" name="id_role" style="cursor: pointer" autofocus required>
                        @foreach ($role as $role_item)
                        <option value="{{ $role_item->id }}" >{{$role_item->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Username"  value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="e-mail"  value="{{ old('email') }}" required>
                </div>
            </div>
            <div class="form-group" id="show_hide_password">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-eye-slash" aria-hidden="true" onclick="showPassword()" style="cursor:pointer;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" id="show_hide_password">
                <label>Re-Type Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Type Password" value="{{ old('password_confirmation') }}" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-eye-slash" aria-hidden="true" onclick="showPassword()" style="cursor:pointer;"></i>
                        </div>
                    </div>
                </div>
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
                <button type="button" class="btn btn-secondary" onclick=" window.location='{{ route('user-admin.index') }}' ">Back</button>
            </div>
            <div class="btn-group btn-group-sm">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
    </div>
@stop