<h1>Konfirmasi Penghapusan</h1>

<p>Anda yakin ingin menghapus post ini?</p>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Hapus</button>
</form>
