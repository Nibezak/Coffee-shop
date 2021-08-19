<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

use Mtownsend\ReadTime\ReadTime;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch the latest posts
        // // if their is search in the request, then get all the post valide to that search
        // // then load
    $posts = Post::latest();
    if(request('search')){return $this->getPosts();}
    return view('posts',[
    'posts' => $posts->simplePaginate(24),
    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //grab a post and estimate the time it will take to read it using "read_time package" that you can configure in read_time.php
        $read_time =  $readTime = (new ReadTime([$post]))->get();
        return view('post', [
         'post' => $post,
         'read_time' =>$read_time

    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
     protected function getPosts()
     {
        // grab all posts that have a similar name to that that is passed in the request
    $posts = Post::latest();
    $posts
    ->where('title', 'like', '%' . request('search') . '%')
    ->orWhere('body', 'like', '%' . request('search'). '%');
    return view('SearchPage',[
    'posts' => $posts->get()
    ]);

     }


      public function showPostTags(Tag $tag)
        {
            // show all posts associated with a particular Tag
        return view('post-tags', [
        'posts' => $tag->posts
        ]);
        }

        public function showAuthorPosts(User $author)
        {
        $author = $author->posts;
        return view('authors',[
        'posts' => $author,
        'tags' => Tag::all(),

        ]);
        }
}
