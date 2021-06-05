@extends('layout3')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <h2 style="text-align:center">Customer Details</h2>
  <a style="float:right" href="http://127.0.0.1:8000/home"><button class="btn btn-primary">Add Customer</button></a><br>
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Place</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->place}}</td>
            <td class="text-center">
                <a href="{{ route('customers.edit', $customer->id)}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('customers.destroy', $customer->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
