@extends('layouts.loginlay')

@section('content')

   <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
   flex items-center justify-center">

<div class="w-full h-100">


 <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>
               <form action="{{ route('auth.check') }}" method="post" class = "mt-6">
       
         
                  @if(Session::get('fail'))
                   <div class="alert alert-danger">
                      {{ Session::get('fail') }}
                   </div>
                @endif
      
               @csrf

               <label class="block text-gray-700">Email Address</label>
                     
                     <input type="text" class=" w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                     <span class="text-danger">@error('email'){{ $message }} @enderror</span>
         
                     <label class="block text-gray-700">Password</label>
                     <input type="password" class=" w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                     focus:bg-white focus:outline-none" name="password" placeholder="Enter password">
                     <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                
                  <div class="text-right mt-2">
                     <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                   </div>

                   <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                   px-4 py-3 mt-6">Sign In</button>
            
                  </form>
                  <hr class="my-6 border-gray-300 w-full">
                  <p class="mt-8">Need an account? <a href="{{ route('auth.register') }}" button class=" text-blue-500 hover:text-blue-700 font-semibold">Create New Account</a>
               </div>
            </div>
      
        


    @endsection