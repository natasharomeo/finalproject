@extends('layouts.app')

@section('content')
        <div class="flex justify-evenly">
         
            <div class="w1/2 mb-10 ml-7 ">
                <div class="bg-white p-3 border-t-4 border-green-400">
                   
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $LoggedUserInfo['fname'] }}</h1>
         
                  
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Ride Leader</span></span>
            
                        </li>
                        <li class="flex items-center py-3">
                            <span>Total Distance </span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">11km</span></span>
            
                        </li>
                        <li class="flex items-center py-3">
                            <span>Total Rides </span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">12 Rides</span></span>
            
                        </li>
                    </ul>
                </div>


                <!-- End of profile card -->
                <div class="my-4"></div>
                <div class="bg-white p-3 hover:shadow">
                    <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                        <span class="text-green-500">
                            <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span>About</span>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="text-center my-2">
                            <ul>
                            <li class="p-2">{{ $LoggedUserInfo['fname'] }} </li>
                            <li class="p-2">{{ $LoggedUserInfo['lname'] }}</li>
                            <li class="p-2">{{ $LoggedUserInfo['dob'] }}</li>
                            <li class="p-2">{{ $LoggedUserInfo['city'] }} </li>
                            <li class="p-2">{{ $LoggedUserInfo['suburb'] }}</li>
                            <li class="p-2">{{ $LoggedUserInfo['phoneNo'] }}</li>
                            </ul>

                        </div>
                        
                        
                        </div>
                    </div>
              
                <!-- End of friends card -->
            </div>
       
    

         <div class="w-full md:w-9/12 mx-2 h-64">
            <div class="bg-white shadow rounded-lg w-z mb-10 ml-7 content-start flex justify-items-center">
                
                <div>
                        <img src="/images/1.png" alt="" class="justify-items-end" alt="">
                    
                    </div>
                    <div>
                        <img src="/images/2.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/3.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/4.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/5.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/6.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/7.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/8.png" alt="" class="justify-items-end" alt="">
                    </div>
                    <div>
                        <img src="/images/9.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/10.png" alt="" class="justify-items-end" alt="">
                    </div>
                    <div>
                        <img src="/images/11.png" alt="" class="justify-items-end" alt="">
                    </div>
                    <div>
                        <img src="/images/12.png" alt="" class="justify-items-end" alt="">
                    </div>
                    <div>
                        <img src="/images/13.png" alt="" class="justify-items-end " alt="">
                    </div>
                    <div>
                        <img src="/images/14.png" alt="" class="justify-items-end " alt="">
                    </div>
                
               
            </div>

            
           
           
        <div class="flex justify-evenly">
            <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                <ul class="divide-y divide-gray-300 text-sm text-center ">
                    <li class="p-2 text-xl bg-gray-200"><a href="/training">Training</a></li>
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
        

        <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                
            <ul class="divide-y divide-gray-300 text-sm text-center ">
                <li class="p-2 text-xl bg-gray-200"><a href="/ride">Rides</a></li>
                <li class="p-2">Location </li>
                <li class="p-2">Distance</li>
                <li class="p-2 text-left bg-gray-200">Date:</li>
                <li class="p-2">Location </li>
                <li class="p-2">Distance</li>
                <li class="p-2 text-left bg-gray-200">Date:</li>
            </ul>
      
            </div>          
     </div>
        
        

@endsection

