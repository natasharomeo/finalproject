@extends('layouts.profile')

@section('content')


<div class="justify-center pl-72 pr-52">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200">
<form method = "POST" action = "/adminposts">
@csrf

                    <div class="mb-4">
					<label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required></input>
                    </div>

                    <div class="mb-8">
                        <label class="text-xl text-gray-600">Description <span class="text-red-500">*</span></label></br>
                        <input type="textarea" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" value="" required></input>
                    </div>

            
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                        <a href="/adminposts" class="p-3 bg-red-500 text-white hover:bg-red-400">Cancel</a>
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