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
            <h3 class="card-title">Page Categories</h3>
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
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th><i class="fas fa-cogs">&nbsp; Kategori</i></th>
                        <th><i class="far fa-clipboard">&nbsp; Title</i></th>
                        <th></th>
                        <th><i class="fas fa-user-secret"></i>&nbsp; Status</th>
                        <th style="width: 40px">
                            <a class="btn btn-info btn-sm" href="javascript:void(0)" id="addPage">
                            <i class="fas fa-user-plus"></i>&nbsp; &nbsp; Add Page</a>
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
                            <a class="btn btn-warning btn-sm edit" href="javascript:void(0)" id="edit" data-id="{{$show->id}}"><i class="fas fa-pencil-alt"></i></a>
                            {{-- <a class="btn btn-danger btn-sm" onclick="deleteData({{$show->id}})"><i class="fas fa-trash"></i></a> --}}
                            <a class="btn btn-danger btn-sm" onclick="deleteData({{$show->id}})"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('admin/page/form')

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
                    url     : "{{ url('admin/page-admin/delete') }}" + "/" +id,
                    type    : "DELETE",
                    dataType: 'JSON',
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
        $('#addPage').click(function () {

            $('#ajaxModel').modal('show');
            $('#form').trigger("reset");
            $('#modelHeading').html("Create New Page");
            $('#saveBtn').val("create");
            $('#id_hidden').val('');
            $('#meta_keywords').val('');
            $('#meta_description').val('');
            $('#title').val('');
            $('#excerpt').summernote('code','');
            $('#body').summernote('code','');
            $("#customRadio1").prop('checked', true);
            $('#image').val('');  

        });
        $('body').on('click', '.edit', function () {

            var id = $(this).data('id');
            $.get("{{ url('admin/page-admin') }}" +'/' + id +'/edit', function (data) {

                $('#modelHeading').html("Edit Page");
                $('#saveBtn').val("update");
                $('#ajaxModel').modal('show');
                $('#id_hidden').val(data.id);
                $('#id_page_category').val(data.id_page_category);
                $('#meta_keywords').val(data.meta_keywords);
                $('#meta_description').val(data.meta_description);
                $('#title').val(data.title);
                $('#excerpt').summernote('code', data.excerpt);
                $('#body').summernote('code', data.body);

                if (data.status==="Published") {
                    $("#customRadio1").prop('checked', true);  
                }
                else  {
                    $("#customRadio2").prop('checked', true);
                } 
                $('#image').val('');  
                $('#image_hidden').val(data.image);
                $('#image_show').html(" <img src={{ asset('storage') }}/" +data.image+ " width=200px> ");
            })

        });
        $('#saveBtn').click(function (e) {

            e.preventDefault();
            var status_button   = $('#saveBtn').val();
            var id              = $('#id_hidden').val();

            if (status_button==="create") {
                var url         ="{{ url('admin/page-admin/store') }}";
            } else {
                var url         ="{{ url('admin/page-admin/update') }}" +"/"+id;
            }

            jQuery('.alert-danger').hide();
            jQuery('.alert-success').hide();
            var formData = new FormData(form);

            jQuery.ajax({
                type        : 'POST',
                url         : url,
                data        : formData,
                cache       : false,
                contentType : false,
                processData : false,

                success: function(result)  {
                    
                    if (result.errors)  {
                        jQuery('.alert-danger').html('');
                        jQuery.each(result.errors, function(key, value)  {

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

                        $('#form').trigger("reset");
                        $('#excerpt').summernote('code','');
                        $('#body').summernote('code','');
                        $("#customRadio1").prop('checked', true);
                        $('#saveBtn').val("create");
                    }
                }
            });
        });
    });
    </script>
@stop


 