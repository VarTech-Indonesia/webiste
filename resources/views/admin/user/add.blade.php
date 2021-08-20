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
    @if(session('error'))
    <script>
        <script>
            $(function() {
                 $(document).Toasts('create', {
                    icon    : 'fas fa-exclamation-triangle',
                    class   : 'bg-danger',
                    title   : 'Save Failed :',
                    subtitle: '',
                    body    : '{{ $error }}'
                })
            });
        </script>
    </script>
    @endif

    @if(session('errors'))
        @foreach ($errors->all() as $error)
        <script>
            $(function() {
                 $(document).Toasts('create', {
                    icon    : 'fas fa-exclamation-triangle',
                    class   : 'bg-danger',
                    title   : 'Input Failed :',
                    subtitle: '',
                    body    : '{{ $error }}'
                })
            });
        </script>
        @endforeach
    @endif
    <div class="card card-lightblue">
        <div class="card-header">
            <h3 class="card-title">{{ $title_table }}</h3>
        </div>
        <form action="{{ route('user-admin.store') }}" method="post" enctype="multipart/form-data" class="dropzone">
        @csrf
        @method('POST')
        <div class="card-body">
            <div class="form-group">
                <label><h6>Role</h6></label>
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
                <label><h6>Username</h6></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Username"  value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="form-group">
                <label><h6>E-mail</h6></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="e-mail"  value="{{ old('email') }}" required>
                </div>
            </div>
            
            <div class="form-group">
                <label><h6>Avatar</h6></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                    </div>
                    <input type="file" name="image" class="dz-default dz-message" placeholder="avatar"  value="{{ old('image') }}">
                </div>
            </div>
            
            <div class="form-group" id="show_hide_password">
                <label><h6>Password</h6></label>
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
                <label><h6>Re-Type Password</h6></label>
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
            <label for="exampleInputEmail1"><h6>Status</h6></label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="Active" checked>
                        <label for="customRadio1" class="custom-control-label"><h6>Active</h6></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="Inactive" >
                        <label for="customRadio2" class="custom-control-label"><h6>Inactive</h6></label>
                      </div>
                </div>
            </div>
        </div>
        <div class="card-footer  float-right">
            <div class="btn-group btn-group-md">
                <button type="button" class="btn btn-secondary" onclick=" window.location='{{ route('user-admin.index') }}' ">
                <i class="fas fa-backward"></i>    
                Back
                </button>
            </div>
            <div class="btn-group btn-group-md">
                <button type="submit" class="btn btn-primary">
                <i class="far fa-save"></i>    
                Save
                </button>
            </div>
        </div>
        </form>
    </div>
@stop