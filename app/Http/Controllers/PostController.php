<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\Tag;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
public function index(Post $post)
    {
       $latestPost = Post::with('tags')->orderBy('created_at', 'desc')->first();
        $allPosts = Post::with('tags')->paginate(10);
        $mostLikedPost = Post::with('tags')->orderBy('like_count', 'desc')->first();
       
       return view('posts.index', [
            'latestPost' => $latestPost,
            'allPosts' => $allPosts,
            'likePost' => $mostLikedPost,
        ]);
        
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)
    {
    return view('posts.show')->with(['post' => $post]);

    }
    
    public function create(Tag $tag)
    {
    return view('posts.create')->with(['tags' => $tag->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $user_id = Auth::id();
        $input = $request['post'];
        $input['user_id'] = $user_id;
        $post->fill($input)->save();
        $tags = $request->input('tags', []);
        $post->tags()->sync($tags);
        return redirect('/posts/' . $post->id);
    }
}
