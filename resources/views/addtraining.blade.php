@extends('layouts.profile')

@section('content')

<div class="justify-center pl-72 pr-52">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="/admintraining">
                    @csrf
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Name<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="name" id="name" value="" required></input>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Location</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="location" id="location" value="" required></input>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Ride Leader</label></br>
                        <select class="border-2 border-gray-300 border-r p-2" name="rideleader" required>
                            @foreach($users as $user)
                                <option value="{{$user['id']}}">{{$user['fname'].' '.$user['lname']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Date<span class="text-red-500">*</span></label></br>
                        <input type="date" class="border-2 border-gray-300 p-2 w-full" name="date" id="date" value="" required></input>                   
                    </div>

                    <div class="mb-4">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                        <a href="/admintraining" class="p-3 bg-red-500 text-white hover:bg-red-400">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'content' );
</script>


@endsection