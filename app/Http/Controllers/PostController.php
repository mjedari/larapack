<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\Wink;
use App\Models\WinkTag;
use App\Models\WinkPost;

class PostController extends Controller
{

    public function index()
    {
        $posts = WinkPost::live()->get();
        $tags = WinkTag::all();
        return view('posts.index', ['posts'=> $posts, 'tags' => $tags]);
    }

    public function show($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();
        return view('posts.show', ['post'=> $post]);
    }
}
