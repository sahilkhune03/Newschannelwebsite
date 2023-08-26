@extends('layouts.app')
  
@section('title', 'Show news')
  
@section('contents')
    <h1 class="mb-0">Detail news</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $news->title }}" readonly>
        </div>
  
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">news</label>
            <input type="text" name="news" class="form-control" placeholder="news Code" value="{{ $news->news }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $news->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $news->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $news->updated_at }}" readonly>
        </div>
    </div>
@endsection