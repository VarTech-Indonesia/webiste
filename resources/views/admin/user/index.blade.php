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

@if (Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Primary</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      The body of the card
    </div>
    <!-- /.card-body -->
  </div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $title_table }}</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
        </button>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Role</th>
                    <th>Nama</th>
                    <th>Alamat Email</th>
                    <th>Status</th>
                    <th style="width: 40px">
                    <div class="btn-group btn-group-sm align-center">
                        <a href="{{ route('user-admin.create') }}" class="btn btn-success">Add</a>
                    </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $show)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$show->role->title}}</td>
                    <td>{{$show->name}}</td>
                    <td>{{$show->email}}</td>
                    <td>{{$show->status}}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('user-admin.edit',$show->id) }}" class="btn btn-warning">Edit</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop