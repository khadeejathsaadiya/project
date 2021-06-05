@extends('layout2')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <h1 style="text-align:center;color:Maroon"><b>User Details</b></h1>
  <a style="float:right" href="http://127.0.0.1:8000/home2"><button class="btn btn-primary">New User</button></a><br>
  <br><br>
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>S No.</td>
          <td>Name</td>
          <td>Contact Info</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usermaster as $usermaster)
        <tr>
            <td>{{$usermaster->id}}</td>
            <td>{{$usermaster->name}}</td>
            <td>{{$usermaster->phone}}</td>
            <td class="text-center">
                
                <form action="{{ route('usermasters.destroy', $usermaster->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-warning btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
