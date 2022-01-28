<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel|Blog</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{asset('assets/admin/css/admin.css')}}">
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                @php
                    dump(\Illuminate\Support\Facades\Auth::check());
                @endphp
                <div class="row">
                    <div class="col-6 m-auto">
                        @include('generalLayouts.alerts')
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
