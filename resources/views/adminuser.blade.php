@extends('layouts.layouts')


@section('content')
    
    <div class="justify-center p-56">
        <div class="text-center md:font-bold text-3xl">
            <h1>
                Users 
            </h1>
        </div>

        <table class="w-full text-md bg-white shadow-md rounded mb-6 ">

            @foreach($users as $user)
<tr>
<td>
</tr>
    @endforeach
        <tbody>
            <tr class="border-b">
                <th class="text-left p-3 px-5">First Name</th>
                <th class="text-left p-3 px-5">Last Name</th>
                <th class="text-left p-3 px-5">Email</th>
                <th class="text-left p-3 px-5">Date of Birth</th>
                <th class="text-left p-3 px-5">City</th>
                <th class="text-left p-3 px-5">Suburb</th>
                <th class="text-left p-3 px-5">Phone No.</th>
                <th class="text-left p-3 px-5">Status</th>
                <th></th>
            </tr>
            @foreach($users as $user)

            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5"><input type="text" value="{{$user['fname']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value= "{{$user['lname']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="{{$user['email']}}" class= "bg-transparent"></td>
                <td class="p-3 px-5"><input type="date" value="{{$user['dob']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value= "{{$user['city']}}" class="bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="{{$user['suburb']}}" class= "bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="{{$user['phoneNo']}}" class= "bg-transparent"></td>
                <td class="p-3 px-5"><input type="text" value="{{$user['status']}}" class= "bg-transparent"></td>
    
              
                <td class="p-3 px-5 flex justify-end">
                    
                    <a href= "/adminuser/{{$user->id }}/edituser" button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit </a>
                </a>
                <a href= {{"delete/".$user['id']}} button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete </a>
                </a>
            </td>
            </tr>
        
        </tr>
  @endforeach
            
      
        </tbody>

        </table>

       
    </div>

    
</div>
@endsection