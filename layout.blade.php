<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>De kiem tra - Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Optionally, add Bootstrap icons (icons are optional and can be excluded) -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap-icons.min.css">

</head>

<body>
    <div class="container"> @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
