
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            @if ($post->thumbnail)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail" style="width: 100px;">
                </div>
            @endif
            <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" value="{{ $post->thumbnail }}">
        </div>


        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $post->judul }}" required>
        </div>

        <div class="form-group">
            <label for="konten">Content</label>
            <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ $post->konten }}</textarea>
        </div>


        <div class="form-group">
            <label for="status_publish">Status</label>
            <select class="form-control" id="status_publish" name="status_publish" required>
                <option value="Draft" {{ $post->status_publish == 'Draft' ? 'selected' : '' }}>Draft</option>
                <option value="Publish" {{ $post->status_publish == 'Publish' ? 'selected' : '' }}>Publish</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal_publikasi">Publish Date</label>
            <input type="date" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" value="{{ $post->tanggal_publikasi ? date('Y-m-d', strtotime($post->tanggal_publikasi)) : null }}">
        </div>




        <button type="submit" class="btn btn-primary">Update</button>
    </form>

