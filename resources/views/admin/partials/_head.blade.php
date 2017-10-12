<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/docassist.png">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Plugins for Navbars CSS -->
   <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!--  CSS -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- less CSS -->
    <link href="{{asset('less/style.less')}}"   rel="stylesheet/less" type="text/css">
    <!-- sidebar-nav less -->
    <link href="{{asset('less/sidebar-nav.less')}}" rel="stylesheet/less" type="text/css">
    <!-- Responsive less -->
    <link href="{{asset('less/responsive.less')}}"  rel="stylesheet/less" type="text/css">


    <!-- Icons -->
    <link href="{{asset('less/icons/themify-icons/themify-icons.css')}}"  rel="icon" >
    <link href="{{asset('less/icons/themify-icons/themify-icons.less')}}"  rel="icon" >


    <!-- Table less -->
    <link href="{{asset('bootstrap/less/print.less')}}" rel="stylesheet/less" type="text/css" >
    <link href="{{asset('bootstrap/less/tables.less')}}"  rel="stylesheet/less" type="text/css" >

    <!-- Table less -->
    <link href="{{asset('plugins/bower_components/node_modules/bootstrap/less/tables.less')}}"   rel="stylesheet/less" type="text/css">
    <link href="{{asset('plugins/bower_components/node_modules/bootstrap/less/tables.less')}}"   rel="stylesheet/less" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('stylesheets')
</head>