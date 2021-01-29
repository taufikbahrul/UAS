@extends('layouts.admin')
@section('content')
<div class="container-fluid text-black mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            <div class="card-tittle">
                <h5 class="text-white">Create candi</h5>
            </div>
        </div>
        <div class="card-body p-2">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{route('candi.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
            </div>
            <div class="form-group">
              <label for="text">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Enter text">
            </div>
            <div class="form-group">
              <label for="text">Label</label>
              <input type="text" class="form-control" id="label" name="label" placeholder="Enter text">
            </div>
            <div class="form-group">
              <label for="text">Paragraf</label>
              <input type="text" class="form-control" id="paragraf" name="paragraf" placeholder="Enter text">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
