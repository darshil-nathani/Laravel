@extends('template.layout')

@push('title')
Add Post 
@endpush

@section('content')
<h1>Add Blog Post</h1>

<form method="post" action="{{route('mypost.store')}}">
    @csrf
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" class="form-control"
                        aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label>Subtitle</label>
      <input type="text" name="subtitle" class="form-control"
                        placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
        <label>My Body Content</label>
        <textarea name="body_content" class="form-control" rows="3"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
