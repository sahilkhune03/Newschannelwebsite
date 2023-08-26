@extends('layouts.app')
  
@section('title', 'Show video')
  
@section('contents')
    <h1 class="mb-0">Detail video</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $video->title }}" readonly>
        </div>
  
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">video</label>
            <input type="text" name="video" class="form-control" placeholder="video Code" value="{{ $video->video }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $video->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $video->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $video->updated_at }}" readonly>
        </div>
    </div>
@endsection