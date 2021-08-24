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
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('admin/page_category/form')

    <script type="text/javascript">
    $(function () {
        $.ajaxSetup( {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('#addCategory').click(function () {
                $('#modelHeading').html("Create New Page Category");
                $('#saveBtn').val("create");
                $('#id_page_category').val('');
                $('#title').val('');
                $('#pageForm').trigger("reset");
                $('#ajaxModel').modal('show');
            });

            $('body').on('click', '.editCategory', function () {
                var id = $(this).data('id');
                $.get("{{ route('page-category.index') }}" +'/' + id +'/edit', function (data) {
                    $('#modelHeading').html("Edit Page Category");
                    $('#saveBtn').val("update");
                    $('#ajaxModel').modal('show');
                    $('#id_page_category').val(data.id);
                    $('#title').val(data.title);
                    if (data.status==="Active") {
                        $('input:radio[name=status]')[0].checked = true;   
                    }
                    else  {
                        $('input:radio[name=status]')[1].checked = true; 
                    }   
                })
            });

            $('#saveBtn').click(function (e) {

                var status_button   = $('#saveBtn').val();
                var id              = $('#id_page_category').val();

                if (status_button=="create") {
                    var url         ="{{ route('page-category.store') }}";
                    var type        ="POST";
                } else {
                    var url         ="{{ url('admin/page-category') }}" +"/"+id;
                    var type        ="PUT";
                }

                // alert(status_button);
                // alert(url);
                // alert(type);

                jQuery('.alert-danger').hide();
                jQuery('.alert-success').hide();
                e.preventDefault();
                $(this).html('Save');
            
                $.ajax ({
                    data    : $('#pageForm').serialize(),
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
                            $('#pageForm').trigger("reset");
                        }
                    }
                });
            });
        });
        </script>
@stop


 