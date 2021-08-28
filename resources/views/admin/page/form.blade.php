<div class="modal fade" id="ajaxModel">
    <form name="form" id="form"  enctype="multipart/form-data">
        <input type="hidden" name="id_hidden" id="id_hidden">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title" id="modelHeading"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-lightblue">
                        <div class="card-header">
                        <h3 class="card-title">SEO</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <h6>Meta Keywords</h6>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                                    </div>
                                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" placeholder="Meta Keywords"  value="{{ old('meta_keywords') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <h6>Meta Description</h6>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                                    </div>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description" value="{{ old('meta_description') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-lightblue">
                        <div class="card-header">
                        <h3 class="card-title">Content</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <h6>Page Categories</h6>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-cogs"></i></span>
                                    </div>
                                    <select id="id_page_category" class="form-control" name="id_page_category" style="cursor: pointer" autofocus required>
                                        @foreach ($page_category as $page_category_items)
                                        <option value="{{ $page_category_items->id }}">{{$page_category_items->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <h6>Title</h6>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                                    </div>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ old('title') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <h6>Excerpt</h6>
                                </label>
                                <div class="input-group">
                                    <textarea class="summernote note-editable card-block" id="excerpt" name="excerpt" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <h6>Body</h6>
                                </label>
                                <div class="input-group">
                                    <textarea id="body" name="body" value="{{ old('body') }}" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><h6>Image</h6></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="file" name="image" id="image">
                                    <input type="hidden" name="image_hidden" id="image_hidden">
                                    <div id="image_show" name="image_show"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    <h6>Status</h6>
                                </label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="Published">
                                        <label for="customRadio1" class="custom-control-label">
                                            <h6>Published</h6>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="Unpublish">
                                        <label for="customRadio2" class="custom-control-label">
                                            <h6>Unpublish</h6>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success" style="display:none"></div>
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
