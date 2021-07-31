<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DISPUSIP KOTA BANDUNG</title>

    <!-- <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    @include('layouts.styles')

    @stack('custom-styles')
</head>

<body class="hold-transition layout-navbar-fixed">
    <div class="wrapper">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        @include('layouts.scripts')

        @stack('custom-scripts')
    </div>
</body>

</html>