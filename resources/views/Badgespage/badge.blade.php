@extends('layouts.layouts')
@section('content')

    <div class="justify-center p-30">
        <div class="text-center md:font-bold text-3xl">
        </div>

    <div class="justify-center p-40">
        <div class="text-center md:font-bold text-3xl">

        </div>
        <div>
            <a href="{{url('/addbadge')}}">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-3 px-6 border border-blue-500 hover:border-transparent rounded" id="addbadge"> add badges
            </button></a>
        </div>
        <br>
        <table class="w-full text-md bg-white shadow-md rounded mb-4 ">

            <tbody>
                <tr class="border-b">
                    <th class="text-left p-2 px-4">Badges image</th>
                    <th class="text-left p-2 px-4">Badges Title</th>
                    <th class="text-left p-2 px-4">Badges Type</th>
                    <th class="text-left p-2 px-4">Description</th>
                    <th></th>
                </tr>
                @foreach($Badges as $badge)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-2 px-4"><img src="{{asset("/badges")."/".$badge->image}}" height="60px" width="60px" alt="badge-image"></td>
                    <td class="p-2 px-4">{{$badge->title}}</td>
                    <td class="p-2 px-4">{{$badge->type}}</td>
                    <td class="p-2 px-4">{{$badge->description}}</td>
                    <td></td>

                    <td class="p-2 px-4 flex space-x-2 justify-end">
                        <a href="/edit-badge/{{$badge->id }}">
                            <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded focus:outline-none focus:shadow-outline">Edit</button>
                        </a>
                        {{--<button type="button" class="text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-3 rounded focus:outline-none focus:shadow-outline">Allocate</button>--}}
                        <a href="/delete-badge/{{$badge->id }}">
                            <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>


</div>
@endsection
