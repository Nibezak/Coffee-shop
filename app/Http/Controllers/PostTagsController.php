<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comments;
use App\Models\User;
use App\Models\Tag;


class PostTagsController extends Controller
{


    public function show(Tag $tag)
    {

    return view('post-tags', [
    'posts' => $tag->posts
    ]);
    }
}
