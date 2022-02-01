<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title = 'Laravel Blog::Home';
        $posts = Post::with('category')->orderBy('id', 'DESC')->paginate(1);

        return view('user.index', compact('posts', 'title'));
    }

    public function show($slug) {

        $post = Post::with('category', 'tags')->where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();

        return view('user.post', compact('post'));
    }
}
