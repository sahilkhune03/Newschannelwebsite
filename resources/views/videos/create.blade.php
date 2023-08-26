@extends('layouts.app')
  
@section('title', 'Create videos')
  
@section('contents')
    <h1 class="mb-0">Add videos</h1>
    <hr />
    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="videos" class="form-control" placeholder="videos">
            </div>
        </div>
        <div class="row mb-3">
         
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection