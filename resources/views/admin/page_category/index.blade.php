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
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th><i class="far fa-clipboard">&nbsp; Title</i></th>
                        <th><i class="fas fa-user-secret"></i>&nbsp; Status</th>
                        <th style="width: 40px">
                            <a class="btn btn-info btn-sm" href="javascript:void(0)" id="addCategory">
                            <i class="fas fa-user-plus"></i>&nbsp; &nbsp; Add Page Category</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $show)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$show->title}}</td>
                        <td>{{$show->status}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"></i></a>
                            <a class="btn btn-warning btn-sm editCategory" href="javascript:void(0)" id="editCategory" data-id="{{$show->id}}"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-sm delete" href="javascript:void(0)" id="delete" data-id="{{$show->id}}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('admin/page_category/form_page_category')
    @include('admin/page_category/js_page_category')
@stop


 