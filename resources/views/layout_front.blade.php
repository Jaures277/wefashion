<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>WE FASHION - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="dot" />
    <!-- ** CSS Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/themify-icons/themify-icons.css') }}">
    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet" media="screen" />
</head>

<body>
<!-- header -->
@include('front.insert.header')
<!-- /header -->

<!-- content -->
@yield('content')
<!-- /content -->

<!-- footer -->
@include('front.insert.footer')
<!-- /footer -->

<!-- ** JS Plugins Needed for the Project ** -->
<!-- jquery -->
<script src="{{ asset('assets/plugins/jquery/jquery-1.12.4.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- match-height JS -->
<script src="{{ asset('assets/plugins/match-height/jquery.matchHeight-min.js') }}"></script>
<!-- Main Script -->
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
