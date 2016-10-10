<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/admin/css/vendor.css">
    <link rel="stylesheet" href="/admin/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
				          @include('admin.sidebar')
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div class="row-20">
                    @include('admin.main-nav')
                </div>
                <div class="row-20">
                    <div class="main-header-block">
                        <h1>@yield('h1-header')</h1>
                        <ul class="breadcrumbs">
                            @yield('breadcrumbs')
                        </ul>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.footer')

</body>
</html>
