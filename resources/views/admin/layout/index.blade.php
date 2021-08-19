@extends('admin/layout/main')
@section('title','VarTech - Login Administration')
@include('admin/layout/menu-admin-non')
@include('admin/layout/menu-admin-non-left')

@section('menu-admin-non-left')
@yield('menu-admin-left')
@endsection('menu-admin-non-left')

@section('main-content')

@section('menu-admin')
@yield('menu-admin-non')
@endsection('menu-admin')

@endsection('main-content')