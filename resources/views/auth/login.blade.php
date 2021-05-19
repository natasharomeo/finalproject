<h1>User Login</h1>
<form action="{{ route('auth.check') }}" method="post">
    @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
@csrf

<input type = "text" name="email" placeholder="enter user email" value="{{ old('email') }}"> 
<span class="text-danger">@error('email'){{ $message }} @enderror</span>
<br><br>
<input type = "password" name="password" placeholder="enter user password">
<span class="text-danger">@error('password'){{ $message }} @enderror</span>
<br><br>
<button type= "submit">Login </button>
<br>
<br>
<a href="{{route('/auth/register')}}">I dont Have account, create new</a>
</form>
