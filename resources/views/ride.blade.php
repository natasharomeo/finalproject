@extends('layouts.ridelayout')

@section('content')

<div class="flex justify-evenly">
        <div class="bg-white rounded-lg w-2/5 mb-10 ml-7 ">
            <div class="w-full md:w-5/6 mx-2 h-64">

                <div class="bg-white p-3 shadow-md rounded-lg">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Upcoming Rides</span>
                    </div>
                    <ul class="list-inside space-y-2">
                                <li class="p-2">Name:</li>
                                <li class="p-2">Location: </li>
                                <li class="p-2">Distance:</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                                <li><button class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Join ride</button></li>
                    </ul>
                    
                    <ul class="list-inside space-y-2">
                                <li class="p-2">Name:</li>
                                <li class="p-2">Location: </li>
                                <li class="p-2">Distance:</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                                <li><button class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Join ride</button></li>
                    </ul>
                </div>
                <!-- End of about section -->

                <div class="my-9"></div>

                <div class="bg-white p-3 shadow-md rounded-lg">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Past Rides</span>
                    </div>
                    <ul class="list-inside space-y-2">
                                <li class="p-2">Name:</li>
                                <li class="p-2">Location: </li>
                                <li class="p-2">Distance:</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                                <li class="p-2">Location: </li>
                                <li class="p-2">Distance:</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                    </ul>
                </div>
                
                <div class="my-9"></div>

            </div>
        </div>

        @endsection