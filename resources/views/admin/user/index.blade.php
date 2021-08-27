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

    @if (Session::has('success'))
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            toastr.success("{{ Session::get('success') }}")
        });
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            toastr.error("{{ Session::get('error') }}")
        });
    </script>
    @endif
    
    <script>
    function deleteData() {
            Swal.fire({
                title  : 'Are you sure ?',
                text   : "You won't be able to revert this !",
                icon   : 'warning',
                showCancelButton   : true,
                confirmButtonColor : '#3085d6',
                cancelButtonColor  : '#d33',
                confirmButtonText  : 'Yes, delete it'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-form').submit();
                }
            })
        };
    </script>
    
    <div class="card card-lightblue">
        <div class="card-header">
        <h3 class="card-title">Info</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
        The body of the card
        </div>
    </div>
    <div class="card card-lightblue">
        <div class="card-header">
            <h3 class="card-title">
                {{ $title_table }}
            </h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th><i class="fas fa-user-tag"></i>&nbsp; Name</th>
                        <th></th>
                        <th><i class="fas fa-envelope"></i>&nbsp; e-mail</th>
                        <th><i class="fas fa-user-secret"></i>&nbsp; Status</th>
                        <th style="width: 40px">
                            <a class="btn btn-info btn-sm" href="{{ route('user-admin.create') }}">
                                <i class="fas fa-user-plus"></i>&nbsp; &nbsp; Add User
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $show)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            {{$show->name}}
                            <br/>
                            <small>
                            {{$show->role->title}}  
                            </small>
                        </td>
                        <td><img src="{{asset('storage/'.$show->image)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle"></td>
                        <td>{{$show->email}} </td>
                        <td>{{$show->status}}</td>
                        <td class="project-actions text-right">
                            <form id="delete-form" action="{{ route('user-admin.destroy',$show->id) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"></i></a>
                                <a class="btn btn-warning btn-sm" href="{{ route('user-admin.edit',$show->id) }}"> <i class="fas fa-pencil-alt"></i></a>
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-danger btn-sm" onclick="deleteData()"><i class="fas fa-trash"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


 