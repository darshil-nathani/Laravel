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
      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"  aria-describedby="emailHelp" placeholder="Enter Title">
        @error('title')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
      <label>Subtitle</label>
      <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{ old('subtitle') }}"  placeholder="Enter Subtitle">
      @error('subtitle')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label>My Body Content</label>
        <textarea name="body_content"  class="form-control @error('body_content') is-invalid @enderror" rows="3">{{ old('body_content') }}</textarea>
        @error('body_content')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
