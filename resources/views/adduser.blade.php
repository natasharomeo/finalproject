@extends('layouts.layouts')

@section('content')

<div class="justify-center pl-64">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ url('adduser') }}" class="w-96">
                        @csrf
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Name<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="name" placeholder="Name" id="title" value="" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Email</label></br>
                        <input type="email" class="border-2 border-gray-300 p-2 w-full" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Password</label></br>
                        <input type="password" class="border-2 border-gray-300 p-2 w-full" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Phone</label></br>
                        <input type="tel" class="border-2 border-gray-300 p-2 w-full" name="phone" id="phone" placeholder="Phone">
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">City</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="city" id="city" placeholder="City">
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Country</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="country" id="country" value="" placeholder="Country">
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Role</label></br>
                        <select class="border-2 border-gray-300 border-r p-2" name="role">
                            <option value="2">leader</option>
                            <option value="3">Volunteer</option>
                        </select>
                    </div>

                    <div class="flex p-1">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection