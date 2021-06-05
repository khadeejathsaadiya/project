@extends('layout1')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Update
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
        <form method="post" action="{{ route('docmasters.update', $docmaster->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Name</label>
                <input type="description" class="form-control" name="name" value="{{ $docmaster->name }}" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="description" class="form-control" name="description" value="{{ $docmaster->description }}" />
            </div>
            

            <button type="submit" class="btn btn-block btn-danger">Update</button>
        </form>
    </div>
</div>
@endsection
