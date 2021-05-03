<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cycling without Age</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
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
                        <a href="" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="" class="p-3">Register</a>
                    </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
