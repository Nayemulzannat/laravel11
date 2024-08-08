<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-bootstrap.png">
</head>

<body>

    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>

</html>