<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <!-- Tambahkan link stylesheet, script, atau CDN yang dibutuhkan -->
</head>
<body>
    <header>
        <!-- Tambahkan elemen-elemen header seperti navbar, judul, atau logo -->
    </header>

    <main>
        <div class="container">
            <h1>Posts</h1>

               <td colspan="6">
                   <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
               </td>

            @if ($posts->count() > 0)
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Konten</th>
                            <th>Status_publish</th>
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
                                <td>{{ $post->konten }}</td>
                                <td>{{ $post->status_publish }}</td>
                                <td>{{ $post->tanggal_publikasi }}</td>
                                <td>


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
        </div>
    </main>

    <footer>
        <!-- Tambahkan elemen-elemen footer seperti tautan atau hak cipta -->
    </footer>

    <!-- Tambahkan script yang dibutuhkan -->
</body>
</html>
