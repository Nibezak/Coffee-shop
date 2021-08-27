<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
class UsersController extends Controller
{

         public function profile(User $author)
     {
        $posts = Post::latest()->get();
        return view('users.account.profile',[
            'posts' => $author->posts
        ]);
     }
}
