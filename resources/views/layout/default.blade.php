<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', "To Do App")</title>
    <link href="{{ asset('assets\css\bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div>
        @yield('content')
    </div>
    <h1>Hello, world!</h1>
    <script src="{{ asset('assets\js\bootstrap.min.js') }}"></script>
</body>

</html>
