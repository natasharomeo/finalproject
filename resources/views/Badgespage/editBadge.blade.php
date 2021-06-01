@extends('layouts.profile')

@section('content')

    <div class="justify-center pl-64">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ url('update-badge') }}" class="w-96" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$badge->id}}" name="id">
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Title<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" placeholder="Title" id="title" value="{{$badge->title}}" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Badge Type<span class="text-red-500">*</span></label></br>
                        <select class="border-2 border-gray-300 p-2 w-full" name="type">
                            <option value="Distance">Distance</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Requirements for Badge</label></br>
                        <select class="border-2 border-gray-300 p-2 w-full" name="requirements">
                            <option value="25">25-49 KM</option>
                            <option value="50">50-99 KM</option>
                            <option value="100">100+ KM</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Description<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" placeholder="Description" value="{{$badge->description}}" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Badge Image</label></br>
                        <img src="{{asset("/badges")."/".$badge->image}}" height="100px" width="100px" alt="badge-image">
                        <input type="hidden" class="border-2 border-gray-300 p-2 w-full" name="image" value="{{$badge->image}}">
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">if you want to change Badge Image then upload</label></br>
                        <input type="file" class="border-2 border-gray-300 p-2 w-full" name="new_image" {{$badge->image}}>
                    </div>

                    <div class="mb-4">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                        <a href="/admintraining" class="p-3 bg-red-500 text-white hover:bg-red-400">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection