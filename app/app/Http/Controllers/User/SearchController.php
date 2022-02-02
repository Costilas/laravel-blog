<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        $result = [];
        $result['post'] = Post::where('title', 'LIKE', "%{$request->search}%")->get();
        $result['category'] = Category::where('title', 'LIKE', "%{$request->search}%")->get();
        $result['tag'] = Tag::where('title', 'LIKE', "%{$request->search}%")->get();

        return view('user.search.show', compact('result'));
    }
}
