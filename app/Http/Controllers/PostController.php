<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Kode untuk menampilkan daftar post
    }

    public function create()
    {
        // Kode untuk menampilkan halaman form create post
    }

    public function store(Request $request)
    {
        // Kode untuk menyimpan data post baru
    }

    public function show($id)
    {
        // Kode untuk menampilkan detail post berdasarkan ID
    }

    public function edit($id)
    {
        // Kode untuk menampilkan halaman form edit post berdasarkan ID
    }

    public function update(Request $request, $id)
    {
        // Kode untuk mengupdate data post berdasarkan ID
    }

    public function destroy($id)
    {
        // Kode untuk menghapus post berdasarkan ID
    }

}
