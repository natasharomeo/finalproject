@extends('layouts.layouts')

@section('content')

<div class="text-center md:font-bold text-3xl pb-4">
    <h1>
        Training Events
    </h1>
</div>

<table class="w-full text-md bg-white shadow-md rounded mb-4 ">
    @foreach($training as $trainings)
    <tr>
        <td>
    </tr>
    @endforeach
    <tbody>
        <tr class="border-b">
            <th class="text-left p-3 px-5">Name</th>
            <th class="text-left p-3 px-5">Location</th>
            <th class="text-left p-3 px-5">Date</th>
            <th></th>
        </tr>
        @foreach($training as $trainings)
        <tr class="border-b hover:bg-orange-100 bg-gray-100">
            <td class="p-3 px-5"><input type="text" readonly value="{{$trainings['name']}}" class="bg-transparent"></td>
            <td class="p-3 px-5"><input type="text" readonly value="{{$trainings['location']}}" class="bg-transparent"></td>
            <td class="p-3 px-5"><input type="date" readonly value="{{$trainings['date']}}" class="bg-transparent"></td>
            <td class="p-3 px-5 flex justify-end">
                <a href="/admintraining/{{$trainings->id }}/edittraining" button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit </a>
                </a>
                <a href={{"delete-training/".$trainings['id']}} button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete </a>
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<div>
    <a href="/addtraining" button type="button" class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline"> Add </button> </a>
</div>
</div>

@endsection