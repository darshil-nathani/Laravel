@extends('template.layout')
@push('title')
Show Post
@endpush

@section('content')
<h1>My Home Page</h1>

<h4>Title</h4>
<h6>{{$mypost->title}}</h6>
<h4>Subtitle</h4>
<h6>{{$mypost->subtitle}}</h6>
<h4>Body Content</h4>
<p>{{$mypost->body_content}}</p>

@endsection
