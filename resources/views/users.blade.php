@extends('layouts.layouts')

@section('content')



    <div class="justify-center p-20 w-4/5 overflow-auto">
        <div class="text-center md:font-bold text-3xl">
            <h1>
                Users
            </h1>
        </div>

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
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="John" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="john@gmail.com" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="newyork" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="USA" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="+19394343554" class="bg-transparent"></td>
                <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
            </tr>
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="David" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="john@gmail.com" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="newyork" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="USA" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="+19394343554" class="bg-transparent"></td>
                <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
            </tr>
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="John" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="john@gmail.com" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="newyork" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="USA" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="+19394343554" class="bg-transparent"></td>
                <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
            </tr>
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="John" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="john@gmail.com" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="newyork" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="USA" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="+19394343554" class="bg-transparent"></td>
                <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
            </tr>
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="John" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="john@gmail.com" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="newyork" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="USA" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="+19394343554" class="bg-transparent"></td>
                <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
            </tr>

            </tbody>
        </table>

        <div>
            <a href="/adduser">
                <button type="button"class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline"> Add </button>
            </a>
        </div>
    </div>


    </div>
@endsection