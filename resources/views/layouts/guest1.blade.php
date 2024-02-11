<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />

        <!--====== Title ======-->
        <title>SIP Givans - @yield('title')</title>

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('assets/')}}/images/favicon.png" type="image/png" />

        <!--====== CSS Files LinkUp ======-->
        <link rel="stylesheet" href="{{asset('assets/')}}/css/animate.css" />
        <link rel="stylesheet" href="{{asset('assets/')}}/css/glightbox.min.css" />
        <link rel="stylesheet" href="{{asset('assets/')}}/css/lineIcons.css" />
        <link rel="stylesheet" href="{{asset('assets/')}}/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('assets/')}}/css/style.css" />
    </head>

    <body>
        @yield('content')
        <!--====== Javascript Files ======-->
        <script src="{{asset('assets/')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/')}}/js/wow.min.js"></script>
        <script src="{{asset('assets/')}}/js/glightbox.min.js"></script>
        <script src="{{asset('assets/')}}/js/count-up.min.js"></script>
        <script src="{{asset('assets/')}}/js/particles.min.js"></script>
        <script src="{{asset('assets/')}}/js/main.js"></script>
    </body>
</html>
