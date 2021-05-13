@extends('layouts.app')

@section('content')
        <div class="flex justify-evenly">
            <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                <ul class="divide-y divide-gray-300 text-sm text-center ">
                    <li class="p-2 text-xl bg-gray-200"> About</li>
                    <li class="p-2">First Name </li>
                    <li class="p-2">Last Name</li>
                    <li class="p-2">Date of Birth</li>
                    <li class="p-2">City </li>
                    <li class="p-2">Suburb</li>
                    <li class="p-2">Phone Number</li>
                </ul>
          
                </div>
        
        
            <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                
                <ul class="divide-y divide-gray-300 text-sm text-center ">
                    <li class="p-2 text-xl bg-gray-200"><a href="/">Rides</a></li>
                    <li class="p-2">Location </li>
                    <li class="p-2">Distance</li>
                    <li class="p-2 text-left bg-gray-200">Date:</li>
                    <li class="p-2">Location </li>
                    <li class="p-2">Distance</li>
                    <li class="p-2 text-left bg-gray-200">Date:</li>
                </ul>
          
                </div>			
         </div>
           
        
        <div class="flex justify-evenly">
            <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                <ul class="divide-y divide-gray-300 text-sm text-center ">
                    <li class="p-2 text-xl bg-gray-200"><a href="/">Training</a></li>
                    <li class="p-2">Location </li>
                    <li class="p-2">Distance</li>
                    <li class="p-2 text-left bg-gray-200">Date:</li>
                    <li class="p-2">Location </li>
                    <li class="p-2">Distance</li>
                    <li class="p-2 text-left bg-gray-200">Date:</li>
                </ul>
          
                </div>
        
                <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                    <ul class="divide-y divide-gray-300 text-sm text-center ">
                        <li class="p-2 text-xl bg-gray-200">Announcements</li>
                        <li class="p-2">New event coming soon! Keep watch of what's in store! Happy riding </li>
                        
                    </ul>
            </div>
        </div>
        
        <div class="flex justify-center">
            <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                <ul class="divide-y divide-white-100 text-sm text-center ">
                    <li class="p-2 text-xl">Badges</li>    
                </ul>
        </div>
        </div>
        
        

@endsection