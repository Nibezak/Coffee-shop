<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comments;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class PostTagsController extends Controller
{


    public function show(Tag $tag)
    {
        $tags = $tag->posts()->simplePaginate(12);
    return view('posts.post-tags', [
    'posts' =>$tags
    ]);
    }
    public function store()
    {
       $attributes = request()->validate([
            'name' => ['required', 'max:20' ,'min:3'],
        ]);
        $attributes['slug'] = Str::slug(request('name'));
        Tag::create($attributes);
        return back()->with('success', 'Tag is created!');
    }
}
