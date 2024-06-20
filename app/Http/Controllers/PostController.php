<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
public function index(Post $post)
    {
       $latestPost = DB::table('posts')->orderBy('created_at', 'desc')->first();
       
       $allPosts = $post->getPaginateByLimit();
       
       $mostLikedPost = DB::table('posts')->orderBy('like_count', 'desc')->first();
       
       return view('posts.index', [
            'latestPost' => $latestPost,
            'allPosts' => $allPosts,
            'likePost' => $mostLikedPost,
        ]);
        
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
}
