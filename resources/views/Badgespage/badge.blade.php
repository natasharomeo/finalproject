@extends('layouts.layouts')
@section('content')

<h1 class = "text-center md:font-bold text-3xl pb-4">Badges</h1>

            <table class="w-full text-md bg-white shadow-md rounded mb-4 pl-96 pb-96">

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

        <a href="{{url('/addbadge')}}">
            <button class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline" id="addbadge">Add</button>
        </a>

    </div>


</div>
@endsection
