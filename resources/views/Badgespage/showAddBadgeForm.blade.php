@extends('layouts.profile')

@section('content')

    <div class="justify-center pl-64">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ url('addbadge') }}" class="w-96" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Title<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" placeholder="Title" id="title" value="" required>
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
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" placeholder="Description" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Badge Image<span class="text-red-500">*</span></label></br>
                        <input type="file" class="border-2 border-gray-300 p-2 w-full" name="image" required>
                    </div>

                    <div class="flex p-1">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection