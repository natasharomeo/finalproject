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
                <div class="h-10 w-30 self-center mr-2">
                    <img class=" h-10 w-25 self-center" src="/images/mainlogo.png" />
                </div>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="{{ route('auth.logout') }}" type="button" class="focus:outline-none text-red-600 text-s py-2.5 px-5 rounded-md hover:bg-red-100">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>