<script>
    $(document).ready(function() {
        //default api location
        const uri = $(location).attr('protocol') + "//" + $(location).attr('host');

        const pathname = $(location).attr('pathname');
        const lastPath = pathname.substring(pathname.lastIndexOf('/') + 1)

        //param Search
        let params = (new URL(document.location)).searchParams;

        //global getData from Api
        var getDataFromApi = {
            userApi: null
        }

        let paramsLimit = params.get('limit') ? parseInt(params.get('limit')) : 10;
        let paramsPage = params.get('page') ? parseInt(params.get('page')) : 1;
        let paramsFilter = params.get('filter') ? params.get('filter') : null;

        let fetchApiUser = async () => {
            return await fetch(`${uri}/api/users/${lastPath}`, {});
        }

        let fetchUpdateUser = async (param) => {
            console.log(param)
            return await fetch(`${uri}/api/users/${lastPath}`, {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "PUT",
                body: JSON.stringify(param)
            });
        }

        // call api users from api
        const getUser = async function(data, callback, settings) {
            const response = await fetchApiUser();
            if (response.ok) {
                let resJson = await response.json();
                getDataFromApi.userApi = resJson;

                $('#name').val(getDataFromApi.userApi.data.name).attr('disabled', true)
                $('#email').val(getDataFromApi.userApi.data.email).attr('disabled', true)
                $('#role').val(getDataFromApi.userApi.data.role).attr('disabled', true)

            } else {
                console.log(fetchApiUser);
            }
        }

        getUser();

        $('button[name=edit]').on('click', function(event) {
            event.preventDefault();
            $(this).hide()
            $('button[name=save]').attr('hidden', false);
            $('#name').attr('disabled', false)
            $('#email').attr('disabled', false)
            $('#role').attr('disabled', false)
        });

        $('button[name=save]').on('click', function(event) {
            event.preventDefault();

            $(this).attr('disabled', true).text('').append(
                '<span class="spinner-border spinner-border-sm"></span> Loading')
            let objUser = {
                name: $('#name').val(),
                email: $('#email').val(),
                role: $('#role').val()
            }
            fetchUpdateUser(objUser)
                .then(data => {
                    $(this).attr('disabled', false).text('Save')
                    if (data.ok) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil disimpan!'
                        })
                    } else {
                        let response = data.json().then(res => {
                            res.meta.message.map(data => {
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
                        })


                        Swal.fire({
                            icon: 'error',
                            title: 'Data gatal disimpan!'
                        })

                    }
                })
                .catch(err => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Datata gatal disimpan!'
                    })

                });
        });

        $('button[name=cancel]').on('click', function(event) {
            event.preventDefault();
            window.location.href = `${uri}/backend/users`
        });
    })
</script>
