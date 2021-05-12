@extends('layouts.ride')

@section('content')
<div class="flex justify-evenly">

    <div class="w-2/5 bg-white p-6 rounded-lg mb-10 ml-7">
        <table class="table-Auto">
            
    </div>
</div>
          
          <h1>Rides</h1>
          
    
          <div class="flex justify-evenly">
          <div class="w-1/2  bg-white p-0 rounded-lg mb-1 ml-6">
          <table class="table-Auto">
            <thead>
            </tbody>
          </table>
          
          </div>
           </div>     
          <div class="flex justify-evenly">
          <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                  <ul class="divide-y divide-gray-190 text-sm text-center ">
                      <li class="p-2 text-xl bg-gray-200">Upcoming ride</li>
                      <li class="p-2 text-left">Location </li>
                      <li class="p-2 text-left">participants </li>
                      <li class="p-2 text-left">Distance</li>
                      <li>
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> Join
                          </button>
                        </li> 
                      <li class="p-2 text-left bg-gray-200">Date:</li>
                      </ul>
          </div>
          </div>

          <div class="flex justify-evenly">
            <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                    <ul class="divide-y divide-gray-300 text-sm text-center ">
                        <li class="p-2 text-xl bg-gray-200">Upcoming ride</li>
                      <li class="p-2 text-left">Location </li>
                      <li class="p-2 text-left">participants </li>
                      <li class="p-2 text-left">Distance</li>
                      <li>
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> Join
                          </button>
                        </li> 
                      <li class="p-2 text-left bg-gray-200">Date:</li>
                        </ul>
            </div>
            </div>
            <div class="flex justify-evenly">
                <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                        <ul class="divide-y divide-gray-300 text-sm text-center ">
                            <li class="p-2 text-xl bg-gray-200">Upcoming ride</li>
                      <li class="p-2 text-left">Location </li>
                      <li class="p-2 text-left">participants </li>
                      <li class="p-2 text-left">Distance</li>
                      <li>
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> Join
                          </button>
                        </li> 
                      <li class="p-2 text-left bg-gray-200">Date:</li>
                            </ul>
                </div>
                </div>
                <div class="flex justify-evenly">
                    <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                            <ul class="divide-y divide-gray-300 text-sm text-center ">
                                <li class="p-2 text-xl bg-gray-200">Past ride</li>
                                <li class="p-2 text-left">Location </li>
                                <li class="p-2 text-left">participants </li>
                                <li class="p-2 text-left">Distance</li>
                                <li class="p-2 text-center">attended</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                                </ul>
                    </div>
                    </div>

                    <div class="flex justify-evenly">
                        <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
                                <ul class="divide-y divide-gray-300 text-sm text-center ">
                                    <li class="p-2 text-xl bg-gray-200">Past ride</li>
                                <li class="p-2 text-left">Location </li>
                                <li class="p-2 text-left">participants </li>
                                <li class="p-2 text-left">Distance</li>
                                <li class="p-2 text-center">attended</li>
                                <li class="p-2 text-left bg-gray-200">Date:</li>
                                    </ul>
                        </div>
                        </div>

@endsection