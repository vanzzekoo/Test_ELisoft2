<h1>Buat Post Baru</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul">

    <label for="konten">Konten:</label>
    <textarea name="konten" id="konten"></textarea>

    <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->

    <button type="submit">Simpan</button>
</form>
