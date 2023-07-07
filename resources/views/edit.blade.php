<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul" value="{{ $post->judul }}">

    <label for="konten">Konten:</label>
    <textarea name="konten" id="konten">{{ $post->konten }}</textarea>

    <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->

    <button type="submit">Simpan</button>
</form>
