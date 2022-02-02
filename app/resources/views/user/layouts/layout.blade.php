<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title> @yield('title') </title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<div id="wrapper">
    @include('user.layouts.header')

    @yield('banner')


    @if(Request::is('category/*', 'tag/*'))
        @yield('info')
    @endif

    <section class="section lb @if (!Request::is('/')) m3rem @endif">
        <div class="container">
            <div class="row">
                @if(Request::is('category/*', 'tag/*'))
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        @include('user.layouts.sidebar')
                    </div><!-- end col -->

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                    </div><!-- end col -->
                @else
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        @include('user.layouts.sidebar')
                    </div><!-- end col -->
                @endif
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    @include('user.layouts.footer')

    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->
<script>{{ asset('assets/front/js/front.js') }}</script>
</body>
</html>
