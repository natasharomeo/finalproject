@extends('layouts.admin')

@section('content')

<div class="flex justify-evenly">
    <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            Add Training Event
        </button>
    </div>
</div>

<div class="flex justify-evenly">
    <div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
        <table class="table-auto">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Distance</th>
                    <th>Leader</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Parramata</td>
                    <td>12km</td>
                    <td>Robert Wayne</td>
                    <td>12/05/2021</td>
                    <td><button>Edit</button></td>
                    <td><button>Delete</button></td>
                </tr>
                <tr class="bg-emerald-200">
                    <td>John Doe</td>
                    <td>Parramata</td>
                    <td>12km</td>
                    <td>Robert Wayne</td>
                    <td>12/05/2021</td>
                    <td><button>Edit</button></td>
                    <td><button>Delete</button></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Parramata</td>
                    <td>12km</td>
                    <td>Robert Wayne</td>
                    <td>12/05/2021</td>
                    <td><button>Edit</button></td>
                    <td><button>Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection