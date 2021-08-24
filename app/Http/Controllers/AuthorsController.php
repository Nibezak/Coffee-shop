<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tag;
use App\Models\Post;


class AuthorsController extends Controller
{



    public function show(User $author)
    {
    $author = $author->posts;
    return view('authors',[
    'posts' => $author,
    'tags' => Tag::all(),

    ]);
    }
}
