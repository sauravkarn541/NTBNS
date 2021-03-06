<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>NTBNS</title>

            <!-- Bootstrap -->
            <link href="{{url('/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="{{url('/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <!-- NProgress -->
            <link href="{{url('/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
            
            <!-- Custom styling plus plugins -->
            <link href="{{url('/')}}/build/css/custom.min.css" rel="stylesheet">
        </head>
        <body class="nav-md">
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;">
                                <a href="index.html" class="site_title"><i class="fa fa-university"></i> 
                                    <span>NTBNS</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            @yield('header')
                            @yield('menubar')
                            @yield('content')
                            @yield('footer')
        </body>
    </html>