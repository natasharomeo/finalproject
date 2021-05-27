@extends('layouts.profile')

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
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{ $LoggedUserInfo['status'] }}</span></span>
            
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
 
                {{-- Annoucment of events --}}
    
            
                <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                    <ul class="divide-y divide-gray-300 text-sm text-center ">
                        <li class="p-2 text-xl bg-gray-200">Announcements</li>    
                        @foreach($posts as $post)      
        
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="{{$post['title']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value= "{{$post['description']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="{{$post['author']}}" class= "bg-transparent"></td>
                <td class="p-3 px-5 flex justify-end">
                    
                  
                </td>
                </tr>
            
                @endforeach
        
        
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