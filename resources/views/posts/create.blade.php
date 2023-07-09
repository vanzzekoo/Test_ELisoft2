{{--
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
        </div>

        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="form-group">
            <label for="konten">Content</label>
            <textarea class="form-control" id="konten" name="konten" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status_publish" name="status" required>
                <option value="Draft">Draft</option>
                <option value="Publish">Publish</option>
            </select>
        </div>


        <div class="form-group">
            <label for="tanggal_publikasi">Publish Date</label>
            <input type="date" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
 --}}


    <h1>Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
        </div>

        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required>
        </div>

        <div class="form-group">
            <label for="konten">Content</label>
            <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ old('konten') }}</textarea>
        </div>

        <div class="form-group">
            <label for="status_publish">Status</label>
            <select class="form-control" id="status_publish" name="status_publish" required>
                <option value="Draft" {{ old('status_publish') == 'Draft' ? 'selected' : '' }}>Draft</option>
                <option value="Publish" {{ old('status_publish') == 'Publish' ? 'selected' : '' }}>Publish</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal_publikasi">Publish Date</label>
            <input type="date" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" value="{{ old('tanggal_publikasi') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

