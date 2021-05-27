@extends('layouts.layouts')

@section('content')

<div class="justify-center pl-64">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200">
<form method = "POST" action = "/edituser">
@csrf
<input type ="hidden" name = "id" value={{$users['id']}}>

                    <div class="mb-4">
					<label class="text-xl text-gray-600">First Name <span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="fname" id="fname" value="{{$users['fname']}}"></input>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Last Name <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="lname" id="lname" value="{{$users['lname']}}"></input>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">email <span class="text-red-500">*</span></label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="email" id="email" value="{{$users['email']}}"></input>
                            </div>

                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Update</button>
                        
            
               
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'content' );
</script>


@endsection