<script>
    $(document).ready(function() {
        //default api location
        const uri = $(location).attr('protocol') + "//" + $(location).attr('host');

        //param Search
        let params = (new URL(document.location)).searchParams;

        //global getData from Api
        var getDataFromApi = {
            userApi: null,
            editUser: null
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
                url: `${uri}/api/users?${params.toString()}`,
                dataType: "json",
                beforeSend: function() {
                    $('#example1').loading();
                },
                // return the result
                success: function(result) {
                    let data = [];
                    getDataFromApi.userApi = result
                    result.data.data.map((res) => {
                        var mapRes = [];
                        mapRes.push(res.id);
                        mapRes.push(res.name);
                        mapRes.push(res.email);
                        mapRes.push(res.role);

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
                params.set('page', parseInt(getDataFromApi.userApi.data.current_page) + 1)
                window.history.replaceState(null, null, `?${params.toString()}`);
                getUsers();
            }
        })

        $('#example1_previous').on('click', function() {
            if (!$('#example1_previous').hasClass('disabled')) {
                params.set('page', parseInt(getDataFromApi.userApi.data.current_page) - 1)
                window.history.replaceState(null, null, `?${params.toString()}`);
                getUsers();
            }
        })

        $(document).on('click', '#button_detail', function(e) {
            e.preventDefault();
            $('#modal-detail').show();
            let href = `${uri}/api/users/${$(this).attr('data-attr')}`
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
                    $('#detail_name').val(result.data.name)
                    $('#detail_role').val(result.data.role)
                    $('#detail_email').val(result.data.email)
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
            $('#modal-edit').show();
            let href = `${uri}/api/users/${$(this).attr('data-attr')}`
            $.ajax({
                url: href,
                dataType: "json",
                beforeSend: function() {
                    $('#loader').show();
                    $('#example1').loading();
                },
                // return the result
                success: function(result) {
                    getDataFromApi.editUser = result
                    $('#modal-edit').modal("show");
                    $('#name').val(result.data.name)
                    $('#role').val(result.data.role)
                    $('#email').val(result.data.email)
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
        $(document).on('click', '#button_delete', function(e) {
            e.preventDefault();
            let href = `${uri}/api/users/${$(this).attr('data-attr')}`
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

        $('button[name=update]').on('click', function(event) {
            event.preventDefault();
            let objUser = {
                name: $('#name').val(),
                email: $('#email').val(),
                role: $('#role').val(),
            }
            let id = getDataFromApi.editUser.data.id
            $.ajax({
                type: 'PUT',
                url: `${uri}/api/users/${id}`,
                contentType: 'application/json',
                data: JSON.stringify(objUser),
                beforeSend: function() {
                    $('button[name=update]').attr('disabled', true)
                    $('button[name=update]').loading();
                },
                // return the result
                success: function(result) {
                    getUsers();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil disimpan!'
                    }).then((result) => {

                        $("#name").removeClass("is-invalid");
                        $("#role").removeClass("is-invalid");
                        $("#email").removeClass("is-invalid");

                        $('#example1').loading('stop');
                        $("#modal-edit").modal('hide').on('hidden.bs.modal', );
                    })
                },
                complete: function() {
                    $('button[name=update]').attr('disabled', false)
                    $('button[name=update]').loading('stop');
                },
                error: function(jqXHR, testStatus, error) {
                    jqXHR.responseJSON.meta.message.map(data => {
                        if (data == "Nama wajib diisi.") {
                            $("#name").addClass("is-invalid");
                        }
                        if (data == "Role tidak valid.") {
                            $("#role").addClass("is-invalid");
                        }
                        if (data == "Email wajib diisi.") {
                            $("#email").addClass("is-invalid");
                        }
                    })
                    Swal.fire({
                        icon: 'error',
                        title: 'Data gagal disimpan!'
                    })
                },
                timeout: 5000
            })
        });


    })
</script>
