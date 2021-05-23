@extends('layouts.layouts')

@section('content')



    <div class="justify-center p-20 w-4/5 overflow-auto">
        <div class="text-center md:font-bold text-3xl">
            <h1>
                Users
            </h1>
        </div>
        @if(\Illuminate\Support\Facades\Session::get('success'))
            <div class="alert alert-success">
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="text-sm">{{ \Illuminate\Support\Facades\Session::get('success') }}.</p>
                </div>
            </div>
        @endif

        @if(\Illuminate\Support\Facades\Session::get('fail'))

            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ \Illuminate\Support\Facades\Session::get('fail') }}.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg></span>
            </div>
        @endif
        @csrf
        <table class="w-full text-md bg-white shadow-md rounded mb-4 ">

            <tbody>
            <tr class="border-b">
                <th class="text-left p-3 px-5">Name</th>
                <th class="text-left p-3 px-5">Email</th>
                <th class="text-left p-3 px-5">City</th>
                <th class="text-left p-3 px-5">Country</th>
                <th class="text-left p-3 px-5">Phone</th>
                <th></th>
            </tr>
            @foreach($users as $user)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$user->name}}</td>
                    <td class="p-3 px-5">{{$user->email}}</td>
                    <td class="p-3 px-5">{{$user->city}}</td>
                    <td class="p-3 px-5">{{$user->country}}</td>
                    <td class="p-3 px-5">{{$user->phone}}</td>
                    <td class="p-3 px-5 flex justify-end">
                        <a href= "/edit-user/{{$user->id }}" type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit </a>
                        <a href= "/delete-user/{{$user->id }}" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            <a href="{{url('/adduser')}}">
                <button type="button"class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline"> Add </button>
            </a>
        </div>
    </div>


    </div>
@endsection