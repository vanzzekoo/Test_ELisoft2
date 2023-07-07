<?php

<h1>Daftar Post</h1>

@foreach ($posts as $post)
    <h2>{{ $post->judul }}</h2>
    <p>{{ $post->konten }}</p>
    <!-- Tambahkan tampilan lainnya sesuai kebutuhan -->
@endforeach
