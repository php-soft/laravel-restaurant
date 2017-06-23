<!DOCTYPE html>
<html>
<head>
    <title>Hue Xua Restaurant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="page-header">
        @yield('header')
    </div>
    @if (Session::has('success'))
    <div class="alert alert-success"> 
        {{Session::get('success')}}
    </div>
    @endif
    @yield('content')
    @yield('footer')
</div>

</body>

</html>