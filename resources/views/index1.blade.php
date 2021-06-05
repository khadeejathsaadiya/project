@extends('layout1')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif

  

  <h2 style="text-align:center">Document Details</h2>
  <a style="float:right" href="http://127.0.0.1:8000/home1"><button class="btn btn-primary">Add Document</button></a><br>
  
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($docmaster as $docmaster)
        <tr>
            <td>{{$docmaster->id}}</td>
            <td>{{$docmaster->name}}</td>
            <td>{{$docmaster->description}}</td>
            <td class="text-center">
                <a href="{{ route('docmasters.edit', $docmaster->id)}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('docmasters.destroy', $docmaster->id)}}" method="post" style="display: inline-block">
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
