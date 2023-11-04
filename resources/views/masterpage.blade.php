<!doctype html>
<html lang="en">

<head>
    @include('css')
</head>

<body>
    <div id="wrapper-main" style="position: relative;">
        @include('navbar')
        @yield('content')
        @include('footer')
    </div>
    @yield('contentJS')
    @include('js')
</body>

</html>
