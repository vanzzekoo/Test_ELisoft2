<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="thumbnail">Thumbnail:</label>
            <input type="text" name="thumbnail" id="thumbnail" value="{{ $post->thumbnail }}">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <label for="status_publish">Status:</label>
            <select name="status_publish" id="status_publish">
                <option value="draft" {{ $post->status_publish === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="publish" {{ $post->status_publish === 'publish' ? 'selected' : '' }}>Publish</option>
            </select>
        </div>
        <div>
            <label for="tanggal_publikasi">Publication Date:</label>
            <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" value="{{ $post->tanggal_publikasi }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
