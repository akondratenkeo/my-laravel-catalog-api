<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/admin-be/images/favicon.ico" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/admin-be/css/vendor.css">
    <link rel="stylesheet" href="/admin-be/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin-be/css/metis-menu.css">
    <link rel="stylesheet" href="/admin-be/css/styles.css">
    <link rel="stylesheet" href="/admin-be/css/style-responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script> window.Laravel = <?= json_encode(['csrfToken' => csrf_token()]); ?> </script>
</head>
<body>
    <div id="home-layout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 auth-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @include('admin.layouts._partials.footer')
</body>
</html>
