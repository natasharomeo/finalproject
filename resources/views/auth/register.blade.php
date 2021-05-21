<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
<h1>User Register</h1>
<form action="{{  route ('auth.save') }}" method="post">
    @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
           @endif

           @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
           @endif
    @csrf

<input type = "fname" name="fname" placeholder="Enter First Name" value="{{ old('fname') }}"> 
<span class="text-danger">@error('fname'){{ $message }} @enderror</span>

<br><br>
<input type = "lname" name="lname" placeholder="Enter Last Name" value="{{ old('lname') }}"> 
<span class="text-danger">@error('lname'){{ $message }} @enderror</span>

<br><br>
<input type = "email" name="email" placeholder="enter user email"  value="{{ old('email') }}"> 
<span class="text-danger">@error('email'){{ $message }} @enderror</span>
<br><br>

<input type = "dob" name="dob" placeholder="dob"  value="{{ old('dob') }}"> 
<span class="text-danger">@error('dob'){{ $message }} @enderror</span>
<br><br>

<input type = "city" name="city" placeholder="city"  value="{{ old('city') }}"> 
<span class="text-danger">@error('city'){{ $message }} @enderror</span>
<br><br>

<input type = "suburb" name="suburb" placeholder="suburb"  value="{{ old('suburb') }}"> 
<span class="text-danger">@error('suburb'){{ $message }} @enderror</span>
<br><br>

<input type = "phoneNo" name="phoneNo" placeholder="phoneNo"  value="{{ old('phoneNo') }}"> 
<span class="text-danger">@error('phoneNo'){{ $message }} @enderror</span>
<br><br>

<input type = "password" name="password" placeholder="enter user password"  value="">
<span class="text-danger">@error('password'){{ $message }} @enderror</span>

<br><br>
<button type= "submit">Sign Up </button>
<br>
<br>
<a href="{{ route('auth.login') }}">I already have an account, sign in </a>
</form>

