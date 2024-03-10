@extends('template.layout')
@push('title')
Home Page
@endpush

@section('content')
<h1>My Home Page</h1>
<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4"><a href="{{route('mypost.create')}}" class="btn btn-primary">+ Post 📃</a></div>
</div>
<table class="table table-hover table-sm table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    @foreach($myposts as $mypost)
        <tr>
            <td>{{$mypost->id}}</td>
            <td>{{$mypost->title }}</td>
            <td>{{$mypost->subtitle }}</td>
            <td>
                <a href="{{ route('mypost.show', $mypost->id) }}" class="btn btn-info">View Me! 👀</a>
            </td>
            <td><a href="{{ route('mypost.edit', $mypost->id) }}" class="btn btn-warning">Edit Me! ✒</a></td>
            <td>
                <form action="{{ route('mypost.destroy', $mypost->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete Me! 💥" class="btn btn-danger"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
