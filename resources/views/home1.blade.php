@extends('layout1')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Create Document
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('docmasters.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="description" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
