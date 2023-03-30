<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ url('css/styles.css') }}" rel="stylesheet" />
</head>
<body>

    <div class="navbar" style="border-bottom: 2px solid #00000015; font-size: 200%; display: flex; justify-content: center;text-decoration-line: underline">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">index</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.create') }}">Creat</a>
        </li>
    </ul>
</div>
<br>

    @yield('content')

    <script src="{{ url('js/scripts.js') }}"></script>
</body>
</html>