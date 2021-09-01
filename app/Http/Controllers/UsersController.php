<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
class UsersController extends Controller
{

         public function profile()
     {
        $this->authorize('staff-only');
         $author = auth()->user();
        return view('users.account.profile',compact('author'));
     }
}
