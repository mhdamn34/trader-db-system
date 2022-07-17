<!doctype html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Laravel</title>
    <!-- Style -->
    @include('layouts.shared.style')

</head>

<body class="hold-transition sidebar-mini">
    <!-- Wrapper -->
    <div id="app" class="wrapper">

        <!-- navbar temp -->
        @include('layouts.main.navbar')
        
        <!-- sidebar and main (yield)-->
        @include('layouts.main.sidebar')
        
    </div>

    <!-- script -->
    @include('layouts.shared.script')
</body>

</html>