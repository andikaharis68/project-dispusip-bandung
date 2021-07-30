@extends('backend.layouts.app')
@push('custom-styles')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/dist/css/adminlte.min.css">
    <style>
        .border-outline-1 {
            border-style: solid !important;
            border-color: #1C8DCF !important;
            border-width: 0.15rem !important;
        }

    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-6 col-md-12">
                        <div class="card border-outline-1">
                            <div class="card-body">
                                <canvas id="myChart" style="height:165px; width:400px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="card border-outline-1">
                            <div class="card-body">
                                <div class="mt-4 mr-4 ml-4">
                                    <h4>
                                        <b>
                                            TOTAL PUSTAKA<br>
                                        </b>
                                    </h4>
                                    <h5>
                                        KOTA BANDUNG
                                    </h5>
                                    <hr>
                                </div>
                                <div class="row d-flex justify-content-rounded">
                                    <div class="col-12 mr-4 ml-4">
                                        <h5>Jumlah</h5>
                                        <h3>132.321</h3>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Pria</h5>
                                        <h4>132.321</h4>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Wanita</h5>
                                        <h4>132.321</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="card border-outline-1">
                            <div class="card-body">
                                <div class="mt-4 mr-4 ml-4">
                                    <h4>
                                        <b>
                                            TOTAL PUSTAKA<br>
                                        </b>
                                    </h4>
                                    <h5>
                                        KOTA BANDUNG
                                    </h5>
                                    <hr>
                                </div>
                                <div class="row d-flex justify-content-rounded">
                                    <div class="col-12 mr-4 ml-4">
                                        <h5>Jumlah</h5>
                                        <h3>132.321</h3>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Pria</h5>
                                        <h4>132.321</h4>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Wanita</h5>
                                        <h4>132.321</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-md-12">
                        <div class="card border-outline-1">
                            <div class="card-body">
                                <canvas id="myChartLine" style="height:165px; width:400px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="card border-outline-1">
                            <div class="card-body">
                                <div class="mt-4 mr-4 ml-4">
                                    <h4>
                                        <b>
                                            TOTAL PUSTAKA<br>
                                        </b>
                                    </h4>
                                    <h5>
                                        KOTA BANDUNG
                                    </h5>
                                    <hr>
                                </div>
                                <div class="row d-flex justify-content-rounded">
                                    <div class="col-12 mr-4 ml-4">
                                        <h5>Jumlah</h5>
                                        <h3>132.321</h3>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Pria</h5>
                                        <h4>132.321</h4>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Wanita</h5>
                                        <h4>132.321</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="card border-outline-1">
                            <div class="card-body">
                                <div class="mt-4 mr-4 ml-4">
                                    <h4>
                                        <b>
                                            TOTAL PUSTAKA<br>
                                        </b>
                                    </h4>
                                    <h5>
                                        KOTA BANDUNG
                                    </h5>
                                    <hr>
                                </div>
                                <div class="row d-flex justify-content-rounded">
                                    <div class="col-12 mr-4 ml-4">
                                        <h5>Jumlah</h5>
                                        <h3>132.321</h3>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Pria</h5>
                                        <h4>132.321</h4>
                                    </div>
                                    <div class="col-4 mr-4 ml-4">
                                        <h5>Wanita</h5>
                                        <h4>132.321</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    @push('custom-scripts')
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('assets/backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('assets/backend') }}/dist/js/pages/dashboard.js"></script>
        <script>
            $(document).ready(function() {

                const labels = [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'December',
                ];
                const data = {
                    labels: labels,
                    datasets: [{
                            label: 'My First dataset',
                            backgroundColor: '#1C8DCF',
                            borderColor: '#ceb546',
                            data: [0, 10, 5, 2, 20, 30, 45, 10, 20, 30, 40],
                            type: 'line'
                        },
                        {
                            label: 'My First dataset',
                            backgroundColor: '#399f4f',
                            borderColor: '#1C8DCF',
                            data: [0, 10, 5, 2, 20, 30, 45, 10, 20, 30, 40],
                            stack: 'combined'
                        }
                    ]
                };

                const configBar = {
                    type: 'bar',
                    data: data,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Data Pustakawan'
                            }
                        }
                    },
                };

                const configLine = {
                    type: 'bar',
                    data: data,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Chart.js Bar Chart'
                            }
                        }
                    },
                };

                var myChart = new Chart(
                    document.getElementById('myChart'),
                    configBar
                );

                var myChartLine = new Chart(
                    document.getElementById('myChartLine'),
                    configLine
                );


            });
        </script>
    @endpush
@endsection
