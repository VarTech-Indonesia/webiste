<script>
$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#addPage').click(function() {
        $('#ajaxModel').modal('show');
        $('#form').trigger("reset");
        $('#modelHeading').html("Create New Page");
        $('#saveBtn').val("create");
        $('#id_hidden').val('');
        $('#meta_keywords').val('');
        $('#meta_description').val('');
        $('#title').val('');
        $('#title_hidden').val('');
        $('#excerpt').summernote('code', '');
        $('#body').summernote('code', '');
        $("#customRadio1").prop('checked', true);
        $('#image').val('');
        $('#image_hidden').val('');
    });

    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("{{ url('admin/page-admin') }}" + '/' + id + '/edit', function(data) {
            $('#ajaxModel').modal('show');
            $('#modelHeading').html("Edit Page");
            $('#saveBtn').val("update");
            $('#id_hidden').val(data.id);
            $('#id_page_category').val(data.id_page_category);
            $('#meta_keywords').val(data.meta_keywords);
            $('#meta_description').val(data.meta_description);
            $('#title').val(data.title);
            $('#title_hidden').val(data.title);
            $('#excerpt').summernote('code', data.excerpt);
            $('#body').summernote('code', data.body);
            (data.status === "Published") ?  $("#customRadio1").prop('checked', true) :  $("#customRadio2").prop('checked', true);
            $('#image').val('');
            $('#image_hidden').val(data.image);
            $('#image_show').html(" <img src={{ asset('storage') }}/" + data.image + " width=200px> ");
        })

    });

    $('#saveBtn').click(function(e) {
        e.preventDefault();
        let id = $('#id_hidden').val();
        let status_button = $('#saveBtn').val();
        let url;
        status_button === ("create") ? url = "{{ url('admin/page-admin/store') }}" : url = "{{ url('admin/page-admin/update') }}" + "/" + id;
        jQuery('.alert-danger').hide();
        jQuery('.alert-success').hide();
        const formData = new FormData(form);
        jQuery.ajax({
            type: 'POST',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                if (result.success) {
                    jQuery('.alert-success').html('');
                    jQuery('.alert-success').show();
                    jQuery('.alert-success').append(result.success);
                    $('#form').trigger("reset");
                    $('#excerpt').summernote('code', '');
                    $('#body').summernote('code', '');
                    $("#customRadio1").prop('checked', true);
                    $('#saveBtn').val("create");
                } else if (result.errors) {
                    jQuery('.alert-danger').html('');
                    jQuery.each(result.errors, function(key, value) {
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<li>' + value + '</li>');
                    });
                } else {
                    jQuery('.alert-danger').show();
                    jQuery('.alert-danger').append(result.error);
                }
            }
        });
    });

    $('body').on('click', '.delete', function() {
        let id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure ?',
            text: "You won't be able to revert this !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('admin/page-admin/delete') }}" + "/" + id,
                    type: "DELETE",
                    dataType: 'JSON',
                    success: function(result) {
                        if (result.error) {
                            $(document).Toasts('create', {
                                icon: 'fas fa-exclamation-triangle',
                                class: 'bg-danger',
                                title: 'Input Failed :',
                                subtitle: '',
                                body: result.error
                            })
                        } else {
                            var Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1000
                            });
                            toastr.success(result.success);
                            setTimeout(() => {
                                location.reload()
                            }, 1000);
                        }
                    }
                });
            }
        })
    });

});
</script>