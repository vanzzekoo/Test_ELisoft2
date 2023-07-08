<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'thumbnail' => 'nullable|image|max:2048',
            'judul' => 'required',
            'konten' => 'required',
            'status' => 'required|in:Draft,Publish',
            'tanggal_publikasi' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails');
            $validatedData['thumbnail'] = $thumbnailPath;
        }

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'thumbnail' => 'nullable|image|max:2048',
            'judul' => 'required',
            'konten' => 'required',
            'status' => 'required|in:Draft,Publish',
            'tanggal_publikasi' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($post->thumbnail) {
                Storage::delete($post->thumbnail);
            }
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails');
            $validatedData['thumbnail'] = $thumbnailPath;
        }

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        if ($post->thumbnail) {
            Storage::delete($post->thumbnail);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
