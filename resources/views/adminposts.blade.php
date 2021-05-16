@section('content')



    <div class="justify-center p-56">
        <div class="text-center md:font-bold text-3xl">
            <h1>
                Annoucments
            </h1>
        </div>

        <table class="w-full text-md bg-white shadow-md rounded mb-4 ">

        @foreach($postsList as $posts)
<tr>
<td>
</tr>
        @endforeach


            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Title</th>
                    <th class="text-left p-3 px-5">Content</th>
                    <th class="text-left p-3 px-5">Author</th>
                    <th></th>
                </tr>
                
                @foreach($postsList as $posts)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value={{$posts['title']}} class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value={{$posts['content']}} class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value={{$posts['author']}} class="bg-transparent"></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                @endforeach
                
          

            </tbody>
        </table>

        <div>
            <button type="button"class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline"> Add </button>
        </div>
    </div>

    
</div>
@endsection
