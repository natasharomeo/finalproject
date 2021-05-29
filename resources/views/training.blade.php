@extends('layouts.profile')

@section('content')

<div class="flex justify-evenly">
        <div class="bg-white rounded-lg w-2/5 mb-10 ml-7 ">
            <div class="">

                <div class="bg-white p-3 shadow-md rounded-lg">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Upcoming Training</span>
                    </div>
       
                    <ul class="list-inside space-y-2">
                        <li class="p-2">Name</li>
                        <li class="p-2">Location</li>
                        <li class="p-2">Distance</li>
                        <li class="p-2 text-left bg-gray-200">Date</li>
                        <li><button id="buttonmodal" class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Join training</button></li>
                    </ul>
           
                </div>

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
                        <span class="tracking-wide">Past Training</span>
                    </div>
                    <ul class="list-inside space-y-2">
                                <li class="p-2">Name</li>
                                <li class="p-2">Location </li>
                                <li class="p-2">Distance</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                                <li class="p-2">Location </li>
                                <li class="p-2">Distance</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                    </ul>
                </div>
                
                <div class="my-9"></div>

            </div>
        </div>

<div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300">
    <!-- Modal content -->
    <div class="bg-white w-1/8 h-1/4 p-12"> 
        <!--Close modal button-->
        <button id="closebutton" type="button" class="focus:outline-none">
            <!-- Hero icon - close button -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <!-- Test content -->
        <p>
            Are you sure you want to join this training session?
        </p>
        <ul class="flex items-center">
            <li>
                <a type="button" class=" border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Cancel</a>
            </li>
            <li>
                <a type="button" class=" border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Join</a>
            </li>
        </ul>
    </div>
</div>

<script> 
    const button = document.getElementById('buttonmodal')
    const closebutton = document.getElementById('closebutton')
    const modal = document.getElementById('modal')

    button.addEventListener('click',()=>modal.classList.add('scale-100'))
    closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))
</script>

@endsection