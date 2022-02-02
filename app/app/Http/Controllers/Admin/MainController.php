<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categoryStatistics = count(Category::all());
        $tagStatistics = count(Tag::all());
        $postStatistics = count(Post::all());
        $userStatistics = count(User::where('is_admin', 0)->get());

        return view('admin.index', compact('categoryStatistics', 'tagStatistics', 'postStatistics', 'userStatistics'));
    }

}
