
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'مراقب المرحلة المتوسطة') }}</title>


        <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- up to 10% speed up for external res -->
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <!-- preloading icon font is helping to speed up a little bit -->
        <link rel="preload" href="{{asset('fonts/flaticon/Flaticon.woff2')}}" as="font" type="font/woff2" crossorigin>

        <!-- non block rendering : page speed : js = polyfill for old browsers missing `preload` -->

        <link rel="stylesheet" href="{{asset('css/core.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor_bundle.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

        <link rel="manifest" href="{{asset('images/manifest/manifest.json')}}">
        <meta name="theme-color" content="#377dff">

