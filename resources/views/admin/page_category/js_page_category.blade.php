<script type="text/javascript">
$(function () {
    $.ajaxSetup( {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#addCategory').click(function () {
        $('#ajaxModel').modal('show');
        $('#pageForm').trigger("reset");
        $('#modelHeading').html("Create New Page Category");
        $('#saveBtn').val("create");
        $('#id_page_category').val('');
        $('#title').val('');
        $("#customRadio1").prop('checked', true);
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
                $("#customRadio1").prop('checked', true);  
            }
            else  {
                $("#customRadio2").prop('checked', true);
            }   
        })
    });
    $('#saveBtn').click(function (e) {

        var status_button   = $('#saveBtn').val();
        var id              = $('#id_page_category').val();

        if (status_button==="create") {
            var url         ="{{ route('page-category.store') }}";
            var type        ="POST";
        } else {
            var url         ="{{ url('admin/page-category') }}" +"/"+id;
            var type        ="PUT";
        }

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
                    $("#customRadio1").prop('checked', true);
                    $('#saveBtn').val("create");
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
                    url: "{{ url('admin/page-category') }}" + "/" + id,
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