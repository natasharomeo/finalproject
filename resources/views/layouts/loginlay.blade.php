<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body >
        <section class="flex flex-col md:flex-row h-screen items-center">

            <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
              <img src="/images/login.jpeg" alt="" class="w-full h-full object-cover">
            </div>
        @yield('content')
    </body>
</html>
