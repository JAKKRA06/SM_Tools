<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">--}}
    <title>SM Tools!</title>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('/') }}">SALESmanago Tools</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::to('faq') }}"><span class="glyphicon glyphicon-question-sign"></span> FAQ</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-stats"></span> STATISTICS</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-folder-open"></span> RESOURCES</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> TOOLS</a></li>
        </ul>
    </div>
</nav>

<main class="container align-items-center">
    @yield('content')
</main>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->

</body>
</html>
