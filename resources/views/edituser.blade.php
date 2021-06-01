@extends('layouts.profile')

@section('content')

<div class="justify-center pl-72 pr-52">
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

                            <div class="mb-4">
                                <label class="text-xl text-gray-600">status <span class="text-red-500">*</span></label></br>
                                    <input type="text" class="border-2 border-gray-300 p-2 w-full" name="status" id="status" value="{{$users['status']}}"></input>
                                </div>

                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Password <span class="text-red-500">*</span></label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="password" id="password" value="{{$users['password']}}"></input>
                                    </div>

                            <div class="mb-4">
                                    <label class="text-xl text-gray-600">role <span class="text-red-500">*</span></label></br>
                                    <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" input type = "text" name="role" value="{{$users['role']}}">
                                        <option>User</option>
                                        <option>Admin</option>
                                      </select>
                            </div>

                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Update</button>
                            <a href="/adminuser" class="p-3 bg-red-500 text-white hover:bg-red-400">Cancel</a>
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'content' );
</script>


@endsection