<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DISPUSIP KOTA BANDUNG</title>

    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    @include('layouts.styles')

    @stack('custom-styles')
</head>

<body class="hold-transition login-page">
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        @include('layouts.scripts')

        @stack('custom-scripts')
    </section>
</body>

</html>