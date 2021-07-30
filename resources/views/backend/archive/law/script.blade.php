<script>
    $(document).ready(function() {
        //default api location
        const uri = $(location).attr('protocol') + "//" + $(location).attr('host');

        //param Search
        let params = (new URL(document.location)).searchParams;

        //global getData from Api
        var getDataFromApi = {
            galleryApi: null,
            galeryEdit: null,
            galeryForm: {
                title: null,
                description: null,
                file: null
            }
        }

        let paramsLimit = params.get('limit') ? parseInt(params.get('limit')) : 10;
        let paramsPage = params.get('page') ? parseInt(params.get('page')) : 1;
        let paramsFilter = params.get('filter') ? params.get('filter') : null;

        var table = $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "processing": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
        }).draw();

        if (paramsFilter) {
            $('input[type=search]').val(paramsFilter);
        }
        if (paramsLimit) {
            $('select[name=example1_length]').val(paramsLimit);
        }

        let fetchApiUser = async function() {
            return await fetch(`${uri}/api/users?${params.toString()}`, {});
        }

        // call api users from api
        getUsers = () => {
            $.ajax({
                url: `${uri}/api/archives/galleries?${params.toString()}`,
                dataType: "json",
                beforeSend: function() {
                    $('#example1').loading();
                },
                // return the result
                success: function(result) {
                    let data = [];
                    getDataFromApi.galleryApi = result
                    result.data.data.map((res) => {
                        var mapRes = [];
                        mapRes.push(res.id);
                        mapRes.push(res.title);
                        mapRes.push(res.description);
                        mapRes.push(
                            `<img src="${uri}/storage/${res.path}" height="75px" width="75px"> </img>`
                        );

                        var buttonAction =
                            `<div class="form-inline">` +
                            `<div class="form-group mb-2">` +
                            `<button data-toggle="modal" id="button_detail" data-attr="${res.id}" class="btn ml-1 mr-1 btn-info">Detail</buttion>` +
                            `</div>` +
                            `<div class="form-group mx-sm-3 mb-2">` +
                            `<button data-toggle="modal" id="button_edit" data-attr="${res.id}" class="btn ml-1 mr-1 btn-warning">Edit</button>` +
                            `</div>` +
                            `<div class="form-group mb-2">` +
                            `<button  id="button_delete" data-attr="${res.id}" class="btn ml-1 mr-1 btn-danger">Delete</button>` +
                            `</div>` +
                            `</div>`;
                        mapRes.push(buttonAction);
                        data.push(mapRes);
                    })
                    table.rows().remove().draw();
                    table.rows.add(data).draw();

                    // info table
                    $('#info_from').html(result.data.from);
                    $('#info_to').html(result.data.to);
                    $('#info_total').html(result.data.total);

                    // page button
                    $('#example1_current_page a').html(result.data.current_page);
                    result?.data?.next_page_url ? $('#example1_next').removeClass("disabled") :
                        $('#example1_next').addClass("disabled");
                    result?.data?.prev_page_url ? $('#example1_previous').removeClass(
                            "disabled") :
                        $('#example1_previous').addClass("disabled");

                },
                complete: function() {
                    $('#example1').loading('stop');
                },
                error: function(jqXHR, testStatus, error) {
                    $('#example1').loading('stop');
                },
                timeout: 8000
            })
        }

        // call update user
        updateUsers = (param) => {

        }

        getUsers();

        $('select[name=example1_length]').on('change', function() {
            params.set('limit', this.value)
            params.delete('page')
            window.history.replaceState(null, null, `?${params.toString()}`);
            getUsers();
        });

        $('input[type=search]').on('change', function() {
            params.set('filter', this.value)
            window.history.replaceState(null, null, `?${params.toString()}`);
            getUsers();
        });

        $('#example1_next').on('click', function() {
            if (!$('#example1_next').hasClass('disabled')) {
                params.set('page', parseInt(getDataFromApi.galleryApi.data.current_page) + 1)
                window.history.replaceState(null, null, `?${params.toString()}`);
                getUsers();
            }
        })

        $('#example1_previous').on('click', function() {
            if (!$('#example1_previous').hasClass('disabled')) {
                params.set('page', parseInt(getDataFromApi.galleryApi.data.current_page) - 1)
                window.history.replaceState(null, null, `?${params.toString()}`);
                getUsers();
            }
        })

        // Modal Action Create
        $(document).on('click', '#button_create', function(e) {
            e.preventDefault();
            $("#modal-create").modal('show').on('show.bs.modal', );
        })
        // select file upload img
        $('#upload_img').on('change', function() {
            const [file] = upload_img.files
            if (file) {
                getDataFromApi.galeryForm.file = file
                upload_detail_img.src = URL.createObjectURL(file)
            }
        })

        $('#myform').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData();
            formData.append('title', $('#title').val())
            formData.append('file', $('#upload_img')[0].files[0])
            formData.append('description', $('#description').val())
            $.ajax({
                type: 'POST',
                url: `${uri}/api/archives/galleries`,
                contentType: '',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('button[name=create]').attr('disabled', true)
                    $('button[name=create]').loading();
                },
                // return the result
                success: function(result) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil disimpan!'
                    })
                    getUsers();
                },
                complete: function() {
                    $('button[name=create]').attr('disabled', false)
                    $('button[name=create]').loading('stop');
                },
                error: function(jqXHR, testStatus, error) {
                    jqXHR.responseJSON.meta.message.map(data => {
                        if (data == "Judul wajib diisi.") {
                            $("#title").addClass("is-invalid");
                        }
                        if (data == "Deskripsi wajib diisi.") {
                            $("#description").addClass("is-invalid");
                        }
                        if (data == ("File wajib diisi." ||
                                "The file must be an image.")) {
                            $("#upload_img").addClass("is-invalid");
                        }
                    })
                    Swal.fire({
                        icon: 'error',
                        title: 'Data gagal disimpan!',
                    })
                },
                timeout: 5000
            })
        })

        // End Modal Action Create

        // Modal Action Create
        // Modal Action from Table
        $(document).on('click', '#button_detail', function(e) {
            e.preventDefault();
            $('#modal-detail').show();
            let href = `${uri}/api/archives/galleries/${$(this).attr('data-attr')}`
            $.ajax({
                url: href,
                dataType: "json",
                beforeSend: function() {
                    $('#loader').show();
                    $('#example1').loading();
                },
                // return the result
                success: function(result) {
                    $('#modal-detail').modal("show");
                    $('#detail_title').val(result.data.title);
                    $('#detail_slug').val(result.data.slug);
                    $('#detail_description').val(result.data.description);
                    $('#detail_img').attr("src", `${uri}/storage/${result.data.path}`);
                },
                complete: function() {
                    $('#example1').loading('stop');
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#example1').loading('stop');
                },
                timeout: 5000
            })
        })

        $(document).on('click', '#button_edit', function(e) {
            e.preventDefault();
            $("#modal-edit").modal('show').on('show.bs.modal', );
            let href = `${uri}/api/archives/galleries/${$(this).attr('data-attr')}`
            $.ajax({
                url: href,
                dataType: "json",
                beforeSend: function() {
                    $('#loader').show();
                    $('#example1').loading();
                },
                // return the result
                success: function(result) {
                    getDataFromApi.galeryEdit = result
                    $('#edit_title').val(result.data.title);
                    $('#edit_slug').val(result.data.slug);
                    $('#edit_description').val(result.data.description);
                    $('#edit_upload_detail_img').attr("src",
                        `${uri}/storage/${result.data.path}`);
                },
                complete: function() {
                    $('#example1').loading('stop');
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#example1').loading('stop');
                },
                timeout: 5000
            })
        })
        $('#edit_upload_img').on('change', function() {
            const [file] = edit_upload_img.files
            if (file) {
                getDataFromApi.galeryForm.file = file
                edit_upload_detail_img.src = URL.createObjectURL(file)
            }
        })

        $(document).on('click', '#button_delete', function(e) {
            e.preventDefault();
            let href = `${uri}/api/archives/galleries/${$(this).attr('data-attr')}`
            Swal.fire({
                title: 'Do you want to delete?',
                showCancelButton: true,
                confirmButtonText: `Yes`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: href,
                        type: 'DELETE',
                        dataType: "json",
                        beforeSend: function() {
                            $('#loader').show();
                            $('#example1').loading();
                        },
                        // return the result
                        success: function(result) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Data berhasil dihapus!'
                            }).then(() => {
                                getUsers();
                            })
                        },
                        complete: function() {
                            $('#example1').loading('stop');
                        },
                        error: function(jqXHR, testStatus, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Data gagal disimpan!'
                            })
                        },
                        timeout: 5000
                    })
                }
            })
        })

        $('#form_edit').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData();
            formData.append('title', $('#edit_title').val())

            if (edit_upload_img.files[0]) {
                formData.append('file', $('#edit_upload_img')[0].files[0])
            }
            formData.append('description', $('#edit_description').val())
            $.ajax({
                type: 'POST',
                url: `${uri}/api/archives/galleries/${getDataFromApi.galeryEdit.data.id}?_method=PUT`,
                contentType: '',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    console.log(getDataFromApi.galeryEdit.data.id)
                    $('button[name=update]').attr('disabled', true)
                },
                // return the result
                success: function(result) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil disimpan!'
                    }).then(result => {
                        $('#modal-edit').modal('hide').on('hidden.bs.modal', );
                    })
                    getUsers();
                },
                complete: function() {
                    $('button[name=update]').attr('disabled', false)
                },
                error: function(jqXHR, testStatus, error) {
                    jqXHR.responseJSON.meta.message.map(data => {
                        if (data == ("Judul wajib diisi." ||
                                "Judul tidak valid.")) {
                            $("#edit_title").addClass("is-invalid");
                        }
                        if (data == "Deskripsi wajib diisi.") {
                            $("#edit_description").addClass("is-invalid");
                        }
                        if (data == ("File wajib diisi." ||
                                "The file must be an image.")) {
                            $("#edit_upload_img").addClass("is-invalid");
                        }
                    })
                    Swal.fire({
                        icon: 'error',
                        title: 'Data gagal disimpan!',
                    })
                },
                timeout: 5000
            })
        })
        // Modal Action from Table


        // clear input after close modal
        $('#modal-create').on('hidden.bs.modal', function() {
            // upload_img.val = null
            $('#upload_img').val('');
            $('#title').removeClass('is-invalid');
            $('#description').removeClass('is-invalid');
            $('#upload_img').removeClass('is-invalid');
            file = ''
            upload_detail_img.src = ''
        })
        $('#modal-edit').on('hidden.bs.modal', function() {
            // upload_img.val = null
            $('#edit_upload_img').val('');
            $('#edit_title').removeClass('is-invalid');
            $('#edit_description').removeClass('is-invalid');
            $('#edit_upload_img').removeClass('is-invalid');
            file = ''
            edit_upload_detail_img.src = ''
        })


    })
</script>
