<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Disarsipus Kota Bandung</title>

    @include('backend.layouts.styles')
    @stack('custom-styles')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <div class="fa-3x">
                <i class="fas fa-spinner fa-spin"></i>
            </div>
        </div>
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include('backend.layouts.header')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-light-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ asset('assets/backend/') }}/index3.html" class="brand-link">
                    <img src="{{ asset('img/Logo-DISPUSIP-Kota-Bandung.png') }}" alt="DISARSIPUS Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">DISARSIPUS</span>
                </a>

                <!-- Sidebar -->
                @include('backend.layouts.sidebar')
                <!-- /.sidebar -->
            </aside>
            @yield('content')
            <!-- Footer -->
            @include('backend.layouts.footer')
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">

            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        @include('backend.layouts.scripts')
        @stack('custom-scripts')
</body>

</html>
