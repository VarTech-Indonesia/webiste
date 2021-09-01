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
            <h3 class="card-title">Info</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
           
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
        <div class="card-body">
            <table class="table table-hover text-nowrap" id="example2">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th><i class="fas fa-cogs">&nbsp; Kategori</i></th>
                        <th><i class="far fa-clipboard">&nbsp; Title</i></th>
                        <th></th>
                        <th><i class="fas fa-user-secret"></i>&nbsp; Status</th>
                        <th style="width: 40px">
                            <a class="btn btn-info btn-sm add" href="javascript:void(0)" id="add">
                                <i class="fas fa-user-plus"></i>&nbsp; &nbsp; Add Page
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $show)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$show->pageCategory->title}}</td>
                        <td>{{$show->title}}</td>
                        <td><img src="{{asset('storage/'.$show->image)}}" width="200px"></td>
                        <td>{{$show->status}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"></i></a>
                            <a class="btn btn-warning btn-sm edit" href="javascript:void(0)" id="edit" data-id="{{$show->id}}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-danger btn-sm delete" href="javascript:void(0)" id="delete" data-id="{{$show->id}}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('admin/page/js_page')
    @include('admin/page/form_page')
@stop


 