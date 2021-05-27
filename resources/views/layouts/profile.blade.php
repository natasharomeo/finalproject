<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cycling without Age</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-100">
        <nav class="p-6 bg-green-100 flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <div class="h-10 w-10 self-center mr-2">
                        <img class=" h-12 self-center" src="/images/mainlogo.png" />
                      </div>
                </li>
            </ul>

            <ul class="flex items-center">
                <li>
                    <a href="{{ route('auth.logout') }}"type= "button" class=" border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Logout</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
