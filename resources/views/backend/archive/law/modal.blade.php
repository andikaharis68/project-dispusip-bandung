<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" id="myform">
                <div class="modal-header">
                    <h4 class="modal-title">Create</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Judul</label>
                                <input type="text" class="form-control" id="detail_title" disabled
                                    placeholder="Description">
                            </div>
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <textarea type="text" class="form-control" id="description"
                                placeholder="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">File</label>
                            <div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" accept="pdf" class="custom-file-input" id="upload_img">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <img src="" alt="" class="img-fluid mt-1" srcset="" id="upload_detail_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="create" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="detail_description" disabled
                                placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">File</label>
                            <div>
                                <img src="" alt="" class="img-fluid" srcset="" id="detail_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" enctype="multipart/form-data" id="form_edit">
                    <div class="modal-header">
                        <h4 class="modal-title">Create</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea type="text" class="form-control" id="edit_description"
                                    placeholder="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">File</label>
                                <div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" accept="pdf" class="custom-file-input"
                                                id="edit_upload_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <img src="" alt="" class="img-fluid mt-1" srcset="" id="edit_upload_detail_img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
