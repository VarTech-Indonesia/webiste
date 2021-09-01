<div class="modal fade" id="ajaxModel">
    <form name="pageForm" id="pageForm" method="POST" enctype="multipart/form-data">
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
                    <div class="modal-body">
                        <div class="form-group">
                            <label>
                                <h6>Title</h6>
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                                </div>
                                <input type="hidden" name="id_page_category" id="id_page_category">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Page Category" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                <h6>Status</h6>
                            </label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="Active">
                                    <label for="customRadio1" class="custom-control-label">
                                        <h6>Active</h6>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="Inactive">
                                    <label for="customRadio2" class="custom-control-label">
                                        <h6>Inactive</h6>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>