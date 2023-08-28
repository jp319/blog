<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->with(['category', 'author'])
                ->filter(
                    request(['search', 'category', 'author'])
                )->paginate(6)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        // Post::where('slug', $post)->firstOrFail()
        // Find a post by its slug and pass it to a view called "post"
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
