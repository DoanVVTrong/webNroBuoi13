<!doctype html>
<html lang="en">

<head>
    @include('css')
</head>

<body>
    <div id="wrapper-main" style="position: relative;">
        @include('navbar')
        @yield('content')
        @yield('contentJS')
        @include('js')
    </div>
</body>

</html>
