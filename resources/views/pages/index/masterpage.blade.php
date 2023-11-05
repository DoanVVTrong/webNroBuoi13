<!doctype html>
<html lang="en">

<head>
    @include('pages.index.css')
</head>

<body>
    <div id="wrapper-main" style="position: relative;">
        @include('pages.index.navbar')
        @yield('content')
        @include('pages.index.footer')
    </div>
    @yield('contentJS')
    @include('pages.index.js')
</body>

</html>
