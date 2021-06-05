@extends('layout2')

@section('content')

<div class="card mt-5">
  <div class="card-header" style="text-align:center;color:navy">
    <b>New User Here</b>
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
      <form method="post" action="{{ route('usermasters.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger" style="margin:auto;display:block;width:50%">Submit</button>
      </form>
  </div>
</div>
@endsection
