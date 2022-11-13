<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Product Database System</title>

        <!-- Style -->
        @include('layouts.shared.style')
    </head>

    <body class="bg-secondary">
        <!-- auth login, sign up -->
        @yield('auth')
        
            <!-- footer -->
            @include('layouts.main.footer')
   
        <!-- script -->
        @include('layouts.shared.script')
    </body>
</html>