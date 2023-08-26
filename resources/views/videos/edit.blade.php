@extends('layouts.app')
  
@section('title', 'Edit video')
  
@section('contents')
    <h1 class="mb-0">Edit video</h1>
    <hr />
    <form action="{{ route('video.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $video->title }}" >
            </div>
          
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">video</label>
                <input type="text" name="video" class="form-control" placeholder="video" value="{{ $video->video }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $video->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection