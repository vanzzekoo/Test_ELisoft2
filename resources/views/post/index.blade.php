@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>

    @if ($posts->count() > 0)
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Published At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            @if ($post->thumbnail)
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail" style="width: 100px;">
                            @endif
                        </td>
                        <td>{{ $post->judul }}</td>
                        <td>{{ $post->status }}</td>
                        <td>{{ $post->tanggal_publikasi }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="form-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    @else
        <p>No posts found.</p>
    @endif
@endsection
