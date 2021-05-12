<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administration</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-100">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Administration</a>
                </li>
            </ul>

            <ul class="flex items-center">
                    <li>
                        <a href="" class="p-3">Admin Name</a>
                    </li>
                    <li>
                        <a href="" class="p-3">Logout</a>
                    </li>
            </ul>
        </nav>
        @yield('content')
    </body>
    
</html>
