<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Px-Admin</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    {{--<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>--}}
</head>
<body>

<div class="scrollmenu">
    <div class="grid grid-flow-col">
        <div class="row-span-4">
            <a href="">Addventageous</a>
        </div>
        <div class="row-span-4" style="text-align:end;padding: 10px 29px 0px 0px;">
            <span class="user-name"> <?php
                if (\Illuminate\Support\Facades\Auth::check()) {
                    echo \Illuminate\Support\Facades\Auth::user()->name;
                }
                ?>
            </span>
            <button onclick="window.location.replace('./logout')" class="button button3" style="border: 1px solid">Logout</button>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="sidebar">
        <ul>
            <li><a href="{{url('/posts')}}"><i class="fas fa-address-card"></i>Posts</a></li>
            <li><a href="{{url('/users')}}"><i class="fas fa-project-diagram"></i>Users</a></li>
            <li><a href="{{url('/badges')}}"><i class="fas fa-project-diagram"></i>Badges</a></li>
        </ul>

    </div>
</div>
@yield('content')


<script>
    function openUserEditForm() {
        document.getElementById("userEditForm").style.display = "block";
    }

    function closeUserEditForm() {
        document.getElementById("userEditForm").style.display = "none";
    }
</script>

</body>
</html>