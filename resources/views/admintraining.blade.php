@extends('layouts.layouts')

@section('content')

<div class="justify-center p-32">
        <div class="text-center md:font-bold text-3xl">
            <h1>
                Training Events
            </h1>
        </div>

        <table class="w-full text-md bg-white shadow-md rounded mb-4 ">

            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Location</th>
                    <th class="text-left p-3 px-5">Distance</th>
                    <th class="text-left p-3 px-5">Ride Leader</th>
                    <th class="text-left p-3 px-5">Date</th>
                    <th></th>
                </tr>
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="Name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Location" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="int" value="Distance" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Ride Leader" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="date" value="Date" class="bg-transparent"></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="Name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Location" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Distance" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Ride Leader" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="date" value="Date" class="bg-transparent"></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="Name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Location" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Distance" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Ride Leader" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="date" value="Date" class="bg-transparent"></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="Name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Location" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Distance" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="Ride Leader" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="date" value="Date" class="bg-transparent"></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                
                
            </tbody>
        </table>

        <div>
            <a href = '/addtraining' button type="button"class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline"> Add </button></a>
        </div>
    </div>

    
</div>
@endsection