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
        <div class="card-body">
            <table class="table table-hover text-nowrap" id="example2">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th><i class="fas fa-arrows-alt">&nbsp; Order Position</i></th>
                        <th><i class="far fa-clipboard">&nbsp; Title</i></th>
                        <th><i class="far fa-clipboard">&nbsp; Body</i></th>
                        <th></th>
                        <th><i class="fas fa-user-secret"></i>&nbsp; Status</th>
                        <th style="width: 40px">
                            <a class="btn btn-info btn-sm add" href="javascript:void(0)" id="add">
                                <i class="fas fa-user-plus"></i>&nbsp; &nbsp; Add Testimonial
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $show)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$show->order_position}}</td>
                        <td>{{$show->title}}</td>
                        <td>{{$show->body}}</td>
                        <td class="text-center">
                            <img src="{{asset('storage/'.$show->image)}}" alt="User Avatar" class="img-size-50 img-circle" > <br>
                            <small>{{$show->customer}}</small><br>
                            <small>{{$show->position}}</small>
                        </td>
                        <td>{{$show->status}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"></i></a>
                            <a class="btn btn-warning btn-sm edit" href="javascript:void(0)" id="edit" data-id="{{$show->id}}"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-sm delete" href="javascript:void(0)" id="delete" data-id="{{$show->id}}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('admin/testimonial/form_testimonial')
    @include('admin/testimonial/js_testimonial')

@stop


 