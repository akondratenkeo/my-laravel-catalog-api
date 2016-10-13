<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/admin/images/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/admin/css/vendor.css">
    <link rel="stylesheet" href="/admin/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/css/metis-menu.css">
    <link rel="stylesheet" href="/admin/css/styles.css">
    <link rel="stylesheet" href="/admin/css/style-responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar">
                @include('admin.sidebar')
            </div>
            <div class="page-main">
                <div class="row">
                    @include('admin.main-nav')
                </div>
                <div class="row">
                    <div class="main-header-block">
                        <h1>@yield('h1-header')</h1>
                        <ol class="breadcrumbs">
                            @yield('breadcrumbs')
                        </ol>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>
</html>
