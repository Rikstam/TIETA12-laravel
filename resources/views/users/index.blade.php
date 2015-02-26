@extends('layouts.base')
@section('body')

<div class="row">
  <div class="large-12 columns">
    <h1>Users</h1>
  </div>
</div>


<div class = "row">

  <div class="large-12 columns">

  <table>
  <thead>
  <tr>
    <th>User id</th>
    <th>User name</th>
    <th>User email</th>
  </tr>
  </thead>

  <tbody>
  @foreach ($users as $user)
  <tr>
  <td>{{$user->id}}</td>
  <td>{{$user->name}}</td>
  <td>{{$user->email}}</td>
  <td><a href=""  class  ="button tiny alert">Delete</button></td>
  </tr>
  @endforeach

  </tbody>

  </table>


  </div>

</div>

@stop
