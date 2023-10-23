<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class PostDisplayController extends Controller
{
    public function show(string $slug): View
    {
        $post = Post::with('categories:title')->firstWhere('slug', $slug);

        if (!$post || $post->status !== 'published') {
            abort(404);
        }

        return view('frontend.single-product', ['item' => $post]);
    }

    public function list(): View
    {
        $posts = Post::where('status', 'published')
            ->with('categories:title')
            ->orderBy('menu_order', 'desc')
            ->get();


        return view('frontend.archive-product', ['items' => $posts]);
    }
}
