<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="review app">
    <meta name=”robots” content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Custom Styles -->

    <link rel="stylesheet" href="{{ mix('nozha-rtl-dashboard-template/css/normalize.css') }}">
    <link href="{{ mix('nozha-rtl-dashboard-template/css/fontawsome/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="http://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ mix('nozha-rtl-dashboard-template/css/main.css') }}">

    <!-- Custom Styles -->
    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body class="font-sans antialiased" >
@inertia
@env ('local')
    {{--
    <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
    --}}
@endenv
<!-- Custom Scripts -->
<script src="{{ mix('nozha-rtl-dashboard-template/js/vendor/modernizr.js') }}"></script>
<script src="{{ asset('nozha-rtl-dashboard-template/js/vendor/jquery-3.2.1.min.js') }}"></script>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"
        defer>
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
        });
    });
</script>
<script>
    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://weatherwidget.io/js/widget.min.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'weatherwidget-io-js');
</script>
<script src="{{ mix('nozha-rtl-dashboard-template/js/main.js') }}" defer></script>

<!-- Custom Scripts -->


</body>
</html>
