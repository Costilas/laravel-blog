<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->with('category')->paginate(1);

        return view('user.tag.show', compact('tag', 'posts'));
    }
}
