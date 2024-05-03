@extends('template.layout')

@push('title')
    Home Page
@endpush

@section('content')
    <div class="container">
        <h1 class="my-4">My Home Page</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($myposts as $mypost)
                                        <tr>
                                            <td>{{$mypost->id}}</td>
                                            <td>{{$mypost->title }}</td>
                                            <td>{{$mypost->subtitle }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Post Actions">
                                                    <a href="{{ route('mypost.show', $mypost->id) }}" class="btn btn-outline-info">View 👀</a>
                                                    <a href="{{ route('mypost.edit', $mypost->id) }}" class="btn btn-outline-warning">Edit ✒</a>
                                                    <form action="{{ route('mypost.destroy', $mypost->id) }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete 💥</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-5">
                                {{ $myposts->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Post</h5>
                        <p class="card-text">Create a new post to share your thoughts.</p>
                        <a href="{{route('mypost.create')}}" class="btn btn-primary btn-block">+ Add Post 📃</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
