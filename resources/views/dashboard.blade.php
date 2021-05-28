@extends('layouts.profile')

@section('content')
        <div class="flex justify-evenly">
         
            <div class="w-80 mb-10 ml-7 ">
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

                <div class="bg-white p-3 my-4">
                   
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">About</h1>
         
                  
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Date of Birth</span>
                            <span class="ml-auto"><span
                                    class="flex items-center py-3">{{ $LoggedUserInfo['dob'] }}</span></span>
            
                        </li>
                        <li class="flex items-center py-3">
                            <span>City</span>
                            <span class="ml-auto"><span
                                    class="flex items-center py-3">{{ $LoggedUserInfo['city'] }}</span></span>
            
                        </li>
                        <li class="flex items-center py-3">
                            <span>Suburb</span>
                            <span class="ml-auto"><span
                                    class="flex items-center py-3">{{ $LoggedUserInfo['suburb'] }}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Phone No</span>
                            <span class="ml-auto"><span
                                    class="flex items-center py-3">{{ $LoggedUserInfo['phoneNo'] }}</span></span>
            
                        </li>
                    </div>
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

            
           
           {{-- Training list --}}
        <div class="flex justify-evenly">
            <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                <ul class="divide-y divide-gray-300 text-sm text-center ">

                    <li class="p-2 text-xl bg-gray-200">Training</li>    
                    @foreach($training as $trainings)
    
        <tr class="border-b hover:bg-orange-100 bg-gray-100">
            <td class="p-3 px-5"><input type="text" value="{{$trainings['name']}}" class="bg-transparent"></td>
            <td class="p-3 px-5"><input type="text" value= "{{$trainings['location']}}" class="bg-transparent"></td>
            <td class="p-3 px-5"><input type="text" value="{{$trainings['rideleader']}}" class= "bg-transparent"></td>
            <td class="p-3 px-5"><input type="date" value="{{$trainings['date']}}" class= "bg-transparent"></td>
            <td class="p-3 px-5 flex justify-end"></td>
        </tr>
        
            @endforeach
    
                </ul>
          
            </div>

            {{-- Rides Lists --}}
            <div class="flex justify-evenly">
                <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                    <ul class="divide-y divide-gray-300 text-sm text-center ">
    
                        <li class="p-2 text-xl bg-gray-200">Rides</li>    
                        @foreach($ride as $rides)
        
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="{{$rides['name']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value= "{{$rides['location']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value= "{{$rides['distance']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="{{$rides['rideleader']}}" class= "bg-transparent"></td>
                <td class="p-3 px-5"><input type="date" value="{{$rides['date']}}" class= "bg-transparent"></td>
                <td class="p-3 px-5 flex justify-end"></td>
            </tr>
            
                @endforeach
        
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
                <td class="p-3 px-5 flex justify-end"></td>
            </tr>
            
                @endforeach
        
        
                    </ul>
            </div>

            
        </div>
        

		
 </div>     
     </div>
        
        

@endsection