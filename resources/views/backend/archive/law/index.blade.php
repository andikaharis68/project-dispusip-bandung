@extends('backend.layouts.app')
@push('custom-styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    {{-- <link rel="stylesheet"
        href="{{ asset('assets/backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/sweetalert2/sweetalert2.min.css">
@endpush

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Galleries</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Archives</a></li>
                            <li class="breadcrumb-item active">Galleries</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content pace-loading-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="content card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <button class="btn btn-primary float-right" data-toggle="modal" id="button_create"><span><i
                                            class="fas fa-plus"></i></span>
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="example1_length"><label>Show <select
                                                        name="example1_length" aria-controls="example1"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input
                                                        type="search" class="form-control form-control-sm" placeholder=""
                                                        aria-controls="example1"></label></div>
                                        </div>
                                    </div>
                                </div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <div class="row mt-md-3">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                            Showing <span id="info_from">0</span> to <span id="info_to">0</span> of <span
                                                id="info_total">0</span> entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination float-right">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous">
                                                    <a href="#" aria-controls="example1" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active" id="example1_current_page">
                                                    <a href="#" aria-controls="example1" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="example1_next">
                                                    <a href="#" aria-controls="example1" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    {{-- modal --}}
    @include('backend.archive.law.modal')

    @push('custom-scripts')
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('assets/backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('assets/backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets/backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('assets/backend') }}/plugins/jquery-loading-master/jquery.loading.js"></script>
        <script src="{{ asset('assets/backend') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
        @include('backend.archive.law.script')
    @endpush
@endsection
