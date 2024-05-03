@extends('template.layout')

@push('title')
Edit Post
@endpush
@section('content')
<h1>Edit the Blog Post</h1>

<form method="post" action="{{route('mypost.update', $mypost->id)}}">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" class="form-control" value="{{$mypost->title}}"
                        aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label>Subtitle</label>
      <input type="text" name="subtitle" class="form-control" value="{{ $mypost->subtitle }}"
                        placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
        <label>My Body Content</label>
        <textarea name="body_content" class="form-control" rows="3">{{$mypost->body_content}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
