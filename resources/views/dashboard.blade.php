@extends('layouts.profile')

@section('content')
<div class="flex justify-evenly">

    <div class="w-80 mb-10 ml-7 ">
        <div class="bg-white p-3 border-t-4 border-green-400 ">

            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $LoggedUserInfo['fname'] }}</h1>
            <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 py-2 px-3 mt-3 divide-y rounded shadow-sm">
                <li class="flex items-center py-3">
                    <span>Status</span>
                    <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{ $LoggedUserInfo['status'] }}</span></span>
                </li>
                <li class="flex items-center py-3">
                    <span>Total Distance </span>
                    <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{@$userTotalDistance}}km</span></span>

                </li>
                <li class="flex items-center py-3">
                    <span>Total Rides </span>
                    <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$userTotalRides}} Rides</span></span>

                </li>
            </ul>
        </div>

        <div class="bg-white p-3 my-4">

            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">About</h1>


            <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                <li class="flex items-center py-3">
                    <span>Date of Birth</span>
                    <span class="ml-auto"><span class="flex items-center py-3">{{ $LoggedUserInfo['dob'] }}</span></span>

                </li>
                <li class="flex items-center py-3">
                    <span>City</span>
                    <span class="ml-auto"><span class="flex items-center py-3">{{ $LoggedUserInfo['city'] }}</span></span>

                </li>
                <li class="flex items-center py-3">
                    <span>Suburb</span>
                    <span class="ml-auto"><span class="flex items-center py-3">{{ $LoggedUserInfo['suburb'] }}</span></span>
                </li>
                <li class="flex items-center py-3">
                    <span>Phone No</span>
                    <span class="ml-auto"><span class="flex items-center py-3">{{ $LoggedUserInfo['phoneNo'] }}</span></span>

                </li>
        </div>
    </div>



    <div class="w-full md:w-9/12 mx-2 h-64">
        <div class="bg-white shadow rounded-lg w-z mb-10 ml-7 content-start flex justify-items-center">
            @foreach ($userBadges as $user)
            <div>
                <img src="{{asset('badges/'.$user['image'])}}" alt="" class="justify-items-end" alt="" width="70px">
            </div>
            @endforeach
        </div>



        {{-- Training list --}}

        <div class=" pl-20 flex items-stretch py-3">
            <div class="bg-white p-3 border-t-4 w-2/5 mb-10 ml-7">
                <div class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <a href="#" span class="tracking-wide ">Upcoming Training</span></a>
                    </div>
                    @foreach($training as $trainings)

                    <ul class="list-inside space-y-2">
                        <li class="flex items-center py-3">
                            <span><b>Name</b></span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$trainings['name']}}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span><b>Location</b></span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$trainings['location']}}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span><b>Date</b></span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$trainings['date']}}</span></span>
                        </li>
                    </ul>

                    @endforeach
                </div>
            </div>

            {{-- Annoucment of Rides --}}
            <div class="bg-white p-3 border-t-4 w-2/5 mb-10 ml-7">
                <div class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <a href="#" span class="tracking-wide ">Completed Rides</span></a>
                    </div>
                    @foreach($ride as $rides)


                    <ul class="list-inside space-y-2">
                        <li class="flex items-center py-3">
                            <span><b>Name</b></span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$rides['name']}}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span><b>Location</b></span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$rides['location']}}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span><b>Distance</b></span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$rides['distance']}}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span><b>Date</b></span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$rides['date']}}</span></span>
                        </li>
                    </ul>

                    @endforeach
                </div>
            </div>



        </div>




        {{-- Annoucment of events --}}

        <div class="bg-white p-3 border-t-4 border-green-400 ">

            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Announcements</h1>
            @foreach($posts as $posts)
            <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 py-2 px-3 mt-3 divide-y rounded shadow-sm">
                <li class="flex items-center py-3">
                    <span><b>{{$posts['title']}}</b></span>

                </li>
                <li class="flex items-center py-3">
                    <span>{{$posts['description']}}</span>
                    <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{ $posts['author'] }}</span></span>

                </li>
            </ul>
            @endforeach
        </div>







    </div>
</div>



@endsection