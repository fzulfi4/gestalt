<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJAsQylCkFiLZt3LzHfg4bg8txXrwR6I3Bx0zVjgm4jvjtyZ1s3Jozwpv2Xj" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Bootstrap JS, Popper.js (Optional for some components like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybS+L6k0pP6FGKjdA6p9sDbbZjt6fQmVd3Kk2gfD2B2ZzV7+1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0+Kry4Nf8v0Mww5YlK4w7nJr6y4FQO4Ez+69F60MgtDP5J8N" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
