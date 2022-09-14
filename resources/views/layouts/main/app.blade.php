<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Product Management System</title>
        <!-- style -->
        @include('layouts.shared.style')
</head>

<body class="sb-nav-fixed">

    <!-- navbar -->
    @include('layouts.main.navbar')

    <div id="layoutSidenav">

        <!-- sidebar -->
        @include('layouts.main.sidebar')

        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>

            <!-- footer -->
            @include('layouts.main.footer')
        </div>
    </div>
    <!-- script -->
    @include('layouts.shared.script')
</body>

</html>