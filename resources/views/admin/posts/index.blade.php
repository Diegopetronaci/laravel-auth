@extends('layouts.dashboard')

@section('content')

    <h1>All Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scope="row">{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>
                    <a href=" {{route('admin.posts.show', ['post' => $post->slug] )}} " class="btn btn-primary"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fas fa-pen fa-sm fa-fw"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash fa-sm fa-fw"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        
@endsection