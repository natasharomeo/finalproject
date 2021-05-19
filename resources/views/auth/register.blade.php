<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
<h1>User Register</h1>
<form action="{{  route ('auth.save') }}" method="post">
    @csrf
<input type = "name" name="name" placeholder="enter full Name" value="{{ old('name') }}"> 
<span class="text-danger">@error('name'){{ $message }} @enderror</span>

<br><br>
<input type = "email" name="email" placeholder="enter user email"  value="{{ old('email') }}"> 
<span class="text-danger">@error('email'){{ $message }} @enderror</span>
<br><br>

<input type = "password" name="password" placeholder="enter user password"  value="{{ old('name') }}">
<span class="text-danger">@error('password'){{ $message }} @enderror</span>

<br><br>
<button type= "submit">Sign Up </button>
<br>
<br>
<a href="{{route('/auth/login')}}">I already have an account, sign in </a>
</form>

