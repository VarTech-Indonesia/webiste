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
                            <i class="fas fa-user-plus"></i>&nbsp; &nbsp; Add Post Category</a>
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
                            <a class="btn btn-danger btn-sm" onclick="deleteData({{$show->id}})"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('admin/post_category/form')

    <script type="text/javascript">
    function deleteData(id) {
        $.ajaxSetup( {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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
                $.ajax ({
                    url     : "{{ url('admin/post-category') }}" + "/" +id,
                    type    : "DELETE",
                    dataType: 'json',
                    success: function(result)  {
                        if (result.error)  {
                            $(document).Toasts('create', {
                                icon    : 'fas fa-exclamation-triangle',
                                class   : 'bg-danger',
                                title   : 'Input Failed :',
                                subtitle: '',
                                body    : result.error
                            })
                        } 
                        else {
                            var Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1000
                            });
                            toastr.success(result.success);
                            setInterval('location.reload()', 1000);
                        }
                    }
                });
            }
        })
    };
    $(function () {
        $.ajaxSetup( {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#addCategory').click(function () {
            $('#ajaxModel').modal('show');
            $('#postForm').trigger("reset");
            $('#modelHeading').html("Create New Post Category");
            $('#saveBtn').val("create");
            $('#id_post_category').val('');
            $('#title').val('');
            $("#customRadio1").prop('checked', true);
        });
        $('body').on('click', '.editCategory', function () {
            var id = $(this).data('id');
            $.get("{{ route('post-category.index') }}" +'/' + id +'/edit', function (data) {
                $('#modelHeading').html("Edit Post Category");
                $('#saveBtn').val("update");
                $('#ajaxModel').modal('show');
                $('#id_post_category').val(data.id);
                $('#title').val(data.title);
                if (data.status==="Active") {
                    $("#customRadio1").prop('checked', true);  
                }
                else  {
                    $("#customRadio2").prop('checked', true);
                }   
            })
        });
        $('#saveBtn').click(function (e) {

            var status_button   = $('#saveBtn').val();
            var id              = $('#id_post_category').val();

            if (status_button==="create") {
                var url         ="{{ route('post-category.store') }}";
                var type        ="POST";
            } else {
                var url         ="{{ url('admin/post-category') }}" +"/"+id;
                var type        ="PUT";
            }

            jQuery('.alert-danger').hide();
            jQuery('.alert-success').hide();
            e.preventDefault();
            $(this).html('Save');
        
            $.ajax ({
                data    : $('#postForm').serialize(),
                url     : url,
                type    : type,
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
                        jQuery('.alert-danger').append(result.error);
                    } 
                    else {
                        jQuery('.alert-success').html('');
                        jQuery('.alert-success').show();
                        jQuery('.alert-success').append(result.success);
                        $('#postForm').trigger("reset");
                        $("#customRadio1").prop('checked', true);
                        $('#saveBtn').val("create");
                    }
                }
            });
        });
    });
    </script>
@stop


 