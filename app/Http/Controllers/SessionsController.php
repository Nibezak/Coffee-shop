<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\validationException;
class SessionsController extends Controller
{

     public function create()
     {
           return view('auth.sessions.create');
     }
      public function store()
      {
        // validate the credentials
       $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);
        //attempt to login the user based on the credintials
       if(Auth::attempt($attributes)){
        //session fixation
        session()->regenerate();
        return redirect('/posts')->with('success', 'Welcome back ');
       }
       throw validationException::withMessages(
        ['email' => "Your provide credentials Could not be Verified"]);

      }
     public function destroy()
     {
        Auth::logout();

        return redirect('/')->with('success','Account Logged out');
     }
}
