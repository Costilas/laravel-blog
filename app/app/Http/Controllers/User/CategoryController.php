<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function show($slug):object
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('id', 'desc')->paginate(1);

        return view('user.category.show', compact('category', 'posts'));
    }
}
