<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cycling without Age</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-white-100">
<nav class="p-6 bg-blue-200 flex justify-between mb-6">
    <ul class="flex items-center">
        <li>
            <a href="" class="p-3">Cycling Without Age</a>
        </li>
        <li>
            <a href="" class="p-3">Dashboard</a>
        </li>
        <li>
            <a href="" class="p-3">Posts</a>
        </li>
    </ul>

    <ul class="flex items-center">
        <li>
            <a href="#" class="p-3">
                <?php
                if (\Illuminate\Support\Facades\Auth::check()) {
                    echo \Illuminate\Support\Facades\Auth::user()->name;
                }
                ?>
            </a>
        </li>
        <li>
            <a href="{{route('logout')}}" class="p-3 text-uppercase">Logout</a>
        </li>
    </ul>
</nav>
@yield('content')
</body>

=======
    <head>
        <title>Cycling without Age</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-white-100">
        <nav class="p-6 bg-blue-200 flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="" class="p-3">Cycling Without Age</a>
                </li>
                <li>
                    <a href="/dashboard" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="" class="p-3"></a>
                </li>
            </ul>

            <ul class="flex items-center">
                    <li>
                        <a href="" class="p-3">Total KMS = </a>
                    </li>
                    <li>
                        <a href="" class="p-3">Total Distance = </a>
                    </li>
                    <li>
                        <a href="" class="p-3">UserName</a>
                    </li>
                    <li>
                        <a href="" class="p-3">Logout</a>
                    </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
