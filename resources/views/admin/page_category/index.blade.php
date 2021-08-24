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
                            {{-- <a class="btn btn-info btn-sm" href="{{ route('page-category.create') }}">
                                <i class="fas fa-user-plus"></i>&nbsp; &nbsp; Add Page Category
                            </a> --}}
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
                            <a class="btn btn-warning btn-sm" href="{{ route('user-admin.edit',$show->id) }}"> <i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="ajaxModel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title" id="modelHeading"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>
                    <form name="pageForm" id="pageForm" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label><h6>Title</h6></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                                    </div>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Page Category"  value="{{ old('title') }}" required>
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
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
$(function () {
    $.ajaxSetup( {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('#addCategory').click(function () {
        $('#modelHeading').html("Create New Page Category");
        $('#saveBtn').val("create-book");
        $('#title').val('');
        $('#pageForm').trigger("reset");
        $('#ajaxModel').modal('show');
    });

    $('body').on('click', '.editBook', function () {
        var book_id = $(this).data('id');
        $.get("{{ route('page-category.index') }}" +'/' + book_id +'/edit', function (data) {
            $('#modelHeading').html("Edit Book");
            $('#saveBtn').val("edit-book");
            $('#ajaxModel').modal('show');
            $('#book_id').val(data.id);
            $('#title').val(data.title);
            $('#author').val(data.author);
        })
    });

    $('#saveBtn').click(function (e) {
        
        jQuery('.alert-danger').hide();
        jQuery('.alert-success').hide();
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax ({
            data    : $('#pageForm').serialize(),
            url     : "{{ route('page-category.store') }}",
            type    : "POST",
            dataType: 'json',
            success: function(result)  {
                if (result.errors)  {
                    jQuery('.alert-danger').html('');
                    jQuery.each(result.errors, function(key, value) 
                    {
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<li>' + value + '</li>');
                    });
                }
                else if (result.error)  {
                    jQuery('.alert-danger').show();
                    jQuery('.alert-danger').append('result.errorssystem');
                } 
                else {
                    jQuery('.alert-success').html('');
                    jQuery('.alert-success').show();
                    jQuery('.alert-success').append(result.success);
                    $('#pageForm').trigger("reset");
                }
            }
        });
    });
});
</script>
@stop


 