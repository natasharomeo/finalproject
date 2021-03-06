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
                        <a class="p-3">Distance traveled:</a>
                    </li>
                    <li>
                        <a class="p-3">total Ride:</a>
                    </li>
                    <li>
                        <a href="" class="p-3">User Name</a>
                    </li>
                    <li>
                        <a href="" class="p-3">Logout</a>
                    </li>
            </ul>
        </nav>
        @yield('content')
    </body>

</html>