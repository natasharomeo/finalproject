@extends('layouts.loginlay')

@section('content')


<div class="md:w-1/2 max-w-lg mx-auto my-24 px-4 py-5 shadow-none">

  <div class="text-left p-0 font-sans">

    <h1 class=" text-gray-800 text-3xl font-medium">Create an account for free</h1>
    <br>
  </div>

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

    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          First Name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border py-3 px-4 mb-3" type="fname" name="fname" placeholder="Enter First Name" value="{{ old('fname') }}">
        <span style="color:red;" class="text-danger">@error('fname'){{ $message }} @enderror</span>
      </div>

      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
          Last Name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" input type="lname" name="lname" placeholder="Last Name" value="{{ old('lname') }}">
        <span style="color:red;" class="text-danger">@error('lname'){{ $message }} @enderror</span>
      </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Email
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" input type="email" name="email" placeholder="enter user email" value="{{ old('email') }}">
        <span style="color:red;" class="text-danger">@error('email'){{ $message }} @enderror</span>

      </div>
    </div>

    <div class="-mx-3 md:flex mb-2">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Suburb
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" input type="suburb" name="suburb" placeholder="suburb" value="{{ old('suburb') }}">
        <span style="color:red;" class="text-danger">@error('suburb'){{ $message }} @enderror</span>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          City
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" input type="city" name="city" placeholder="city" value="{{ old('city') }}">
        <span style="color:red;" class="text-danger">@error('city'){{ $message }} @enderror</span>
      </div>

    </div>

    <div class="-mx-3 md:flex mb-2">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Phone No
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" input type="phoneNo" name="phoneNo" placeholder="phoneNo" value="{{ old('phoneNo') }}">
        <span style="color:red;" class="text-danger">@error('phoneNo'){{ $message }} @enderror</span>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Date of Birth
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" input type="date" name="dob" placeholder="dob" value="{{ old('dob') }}">
        <span style="color:red;" class="text-danger">@error('dob'){{ $message }} @enderror</span>
      </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Status
        </label>
        <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" input type="text" name="status" placeholder="status" value="{{ old('status') }}">
          <option>Pilot Rider</option>
        </select>
      </div>
    </div>



    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Password
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" input type="password" name="password" placeholder="Password" value="">
        <span style="color:red;" class="text-danger">@error('password'){{ $message }} @enderror</span>
      </div>
    </div>


    <div class="mt-10">
      <input type="submit" value="Sign up with email" class="py-3 bg-green-500 text-white w-full rounded hover:bg-green-600">
    </div>


    <a href="{{ route('auth.login') }}" class="block  p-5 text-center text-gray-800  text-xs ">Already have an account?</span></a>
  </form>




  @endsection