<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class AdminUsersController extends Controller
{

    public function dashboard(User $authors)
    {
    $authors = User::latest();
    return view('accounts.admins.profile',[
        'authors' =>$authors->Paginate(6),
    ]);
    }

     public function update(User $author)
     {
           $attributes =  request()->validate([
                'avatar' => ['image','mime:jpg,jpeg,png,svg,gif'],
                'username' => ["max:30","min:3",Rule::unique('users','username')],// one way to validate the username
                'name' =>   ['max:255', 'min:5'],
                'email' =>  ['max:255', 'email',Rule::unique('users','email')->ignore($author)],// you can use this approach to the username as well
                'about' => ['max:255']
            ]);
           if(isset($attributes['avatar']))
           {
                $attributes['avatar'] = request('file')->store('avatars', 'public');
           }
            if(isset($attributes['about']))
           {
                $attributes['about'] = request('about');
           }
           $author->update($attributes);

           return back()->with('success', 'Settings saved!');
     }
      public function update_password(User $author)
      {
              $password = request()->validate([
                       'password' => ['max:255', 'min:6','confirmed'],
              ]);
              $author->update($password);
              return back()->with('success', 'Password Saved!');
      }
    public function destroy(User $author)
    {
    $author->delete();
    return redirect('accounts/profile')->with('success', $author->name . ' Has been deleted');
    }
}
