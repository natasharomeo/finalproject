@extends('layouts.app')

@section('content')

<h1>Training Page</h1>
<div class="flex justify-evenly">

<div class="w-2/5 bg-white p-6 rounded-lg mb-10 ml-7">
<table class="table-Auto">
  <thead>
    <tr>
      <th class="w-1/2 ...">Training</th>
      <th class="w-1/4 ...">Date</th>
      <th class="w-1/4 ...">Ride Leader</th>
      <th class="w-1/4 ..."></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>Tyre pumping</td>
    <td>06/06/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
    <tr class="bg-blue-200">
    <td>Brake replacement</td>
    <td>01/06/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
    <tr>
    <td>First Aid</td>
    <td>26/05/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
    <tr class="bg-blue-200">
    <td>Changing Tyres</td>
    <td>14/05/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
  </tbody>
</table>

</div>
</div>

<h1>Past training sessions</h1>

<div class="flex justify-evenly">
<div class="w-2/5 bg-white p-6 rounded-lg mb-10 ml-7">
<table class="table-Auto">
  <thead>
    <tr>
      <th class="w-1/2 ...">Training</th>
      <th class="w-1/4 ...">Date</th>
      <th class="w-1/4 ...">Ride Leader</th>
      <th class="w-1/4 ..."></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>Tyre pumping</td>
    <td>06/06/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
    <tr class="bg-blue-200">
    <td>Brake replacement</td>
    <td>01/06/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
    <tr>
    <td>First Aid</td>
    <td>26/05/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
    <tr class="bg-blue-200">
    <td>Changing Tyres</td>
    <td>14/05/2021</td>
    <td>Robert Wayne</td>
    <td><button><b>Join training<b></button></td>
    </tr>
  </tbody>
</table>

</div>

</div>

<div class="flex justify-evenly">
<div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
        <ul class="divide-y divide-gray-300 text-sm text-center ">
            <li class="p-2 text-xl bg-gray-200">Upcoming Training</li>
            <li class="p-2">Name </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
            <li class="p-2">Name </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
            <li class="p-2">Name </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
            <li class="p-2">Name </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
        </ul>
</div>
</div>

<div class="flex justify-evenly">
<div class="bg-white shadow rounded-lg w-2/5 mb-10 ml-7 ">
        <ul class="divide-y divide-gray-300 text-sm text-center ">
            <li class="p-2 text-xl bg-gray-200">Past Training</li>
            <li class="p-2">Name </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
            <li class="p-2">Name </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
            <li class="p-2">Location </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
            <li class="p-2">Location </li>
            <li class="p-2">Location </li>
            <li class="p-2">Distance</li>
            <li class="p-2 text-left bg-gray-200">Date:</li>
        </ul>
</div>
</div>

@endsection