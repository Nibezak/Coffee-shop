<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Charts\authorsChart;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AdminUsersController extends Controller
{


    public function dashboard(User $authors)
    {
        $authors = User::latest();
        $total_authors = User::pluck('created_at')->values();
        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $last_week = User::whereDate('created_at', today()->subWeek(1))->count();
        $authorsChart = new authorsChart;
        $authorsChart->labels($total_authors);
        $authorsChart->dataset('Author Tracking', 'bar', [$last_week, $yesterday_users, $today_users])
        ->color('#3498db')
        ->backgroundColor('lightblue');
    return view('accounts.admins.profile',[
        'authors' =>$authors->Paginate(6),
        'authorsChart' => $authorsChart,
        'total_authors' =>$total_authors,
    ]);
    }

     public function create()
     {
        return view('accounts/authors.create');
     }

        public function store()
        {
          $attributes =  request()->validate([
                'username' => ["required","max:30","min:3",Rule::unique('users','username')],
                'name' =>   ['required', 'max:255', 'min:5'],
                'email' =>  ['required', 'max:255', 'email',"unique:users,email"],
                'password' => ['required', 'max:255', 'min:6','confirmed']
            ]);
          $attributes['is_Admin'] = request('accountType');

            User::create($attributes);
            session()->flash('success', 'Author has been created!');
            return redirect(route('admin-dashboard'));
        }
     public function update(User $author)
     {
        $attributes = $this->validateAttributes();
        if(!empty($attributes['avatar'])){$attributes['avatar'] = request('avatar')->store('avatars', 'public');}
        $attributes['about'] = request('about');
         $author->update($attributes);
        return back()->with('success', 'Settings saved!');

     }
      public function update_password(User $author)
      {
              $password = request()->validate([
             'password' => ['max:255', 'min:6','confirmed'],]);
              $author->update($password);
            return back()->with('success', 'Password Saved!');
      }
    public function destroy(User $author)
    {
    $author->delete();
    return redirect('accounts/profile')->with('success', $author->name . ' Has been deleted');
    }
    protected function validateAttributes()
    {
        $author = Auth::user();
       return  request()->validate([
                'avatar' => ['image','file'],
                'username' => ["max:30","min:3",Rule::unique('users','username')->ignore($author)],
                'name' =>   ['max:255', 'min:5'],
                'email' =>  ['max:255', 'email',Rule::unique('users','email')->ignore($author)],
                'about' => ['max:255']
            ]);
    }

}