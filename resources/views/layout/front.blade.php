<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title>@section('title') juan2ramos.com | Diseño y desarrollo web en bogotá  @show</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>


    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon/favicon.ico?v=2" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon/favicon-64x64.png" sizes="64x64" />
    <link rel="icon" type="image/png" href="favicon/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon/favicon-24x24.png" sizes="24x24" />
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon/favicon-128x128.png" sizes="128x128" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <meta name="msapplication-TileColor" content="#ffffff"/>


    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


    <!-- Humans -->
    <link type="text/plain" rel="author" href="{{asset('humans.txt')}}"/>

    {{-- Fonts --}}
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>
    @yield('header')
    <main class="Wrap">  @yield('content') </main>

</body>
<!-- JavaScript -->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('javascript')
</html>