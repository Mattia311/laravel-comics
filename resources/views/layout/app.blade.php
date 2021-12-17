<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics | @yield('page-title', 'comics home')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('custom-css')
</head>
<body>
   
    @include('partial.header')
    <main id="site_main">
        @yield('content')
    </main>
    
    @include('partial.footer')
    
</body>
</html>