<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Review;
use Illuminate\Validation\Rule;
use Mtownsend\ReadTime\ReadTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $posts = Post::latest();
    if(request('search')){return $this->getPosts();}
    return view('posts.index',[
    'posts' => $posts->simplePaginate(8),
    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $this->authorize('posts-create');
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Request $request)
    {

        // Start by uploading a file to the server
        // and getting its path for the database
        $attributes = new Post($this->validateAttributes());
        $attributes['user_id'] = auth()->user()->id;
        $attributes['slug'] = Str::slug(request('title'));
        // $attributes['photo'] = request('photo')->storeAs('photos', request('photo')->getClientOriginalName(), 'publicPhotos');
        $attributes['photo'] = request('photo')->store('photos','public');
        $attributes->save();
        $attributes->tags()->attach(request('tag_id'));

          return redirect('/account/profile')->with('success', 'Post has been Published');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        $read_time =  $readTime = (new ReadTime([$post]))->get();
        return view('posts.show', [
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
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
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
        // $attributes = $this->validateAttributes();
        // $attributes['slug'] = Str::slug(request('title'));
        // if(isset($attributes['photo'])){
        // $attributes['photo'] = request()->file('photo');
        // }
        // $post->update($attributes);

        //   return redirect('/account/profile')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = Post::findOrFail($id);
       $post->delete();
        return back()->with('success', 'Deleted');
    }

     public function review()
     {

      $rating = request('rating');
      dd($rating);
          return back()->with('success', 'Thank you for the review');
     }

     protected function getPosts()
     {
    $posts = Post::latest();


         $posts
    ->where('title', 'like', '%' . request('search') . '%')
    ->orWhere('body', 'like', '%' . request('search'). '%');



    return view('SearchPage',[
        'posts' => $posts->get()
    ]);

     }

     protected function validateAttributes()
     {
        return  request()->validate([
                'photo' => 'required|image|mimes:jpg,png,jpeg,svg,gif|max:5048',
                'title' => 'required',
                'verse' => 'required|max:315|min:100',
                'body' => 'required',
                'tag_id' => ['required',Rule::exists('tags', 'id')]
           ]);
     }
}



//  $photoName  = $request->file('photo')->getClientOriginalName();
// $path = $request->file('photo')->move(public_path('photos'), $photoName);
//  $attributes['photo'] = 'photos/'. $photoName;
