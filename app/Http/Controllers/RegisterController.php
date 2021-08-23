<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\User;
<<<<<<< HEAD
=======
    use Illuminate\Validation\Rule;
    use Illuminate\Support\Facades\Auth;

>>>>>>> bafa905f7d8ee7d604d7a841a02069c14cb11783
    class RegisterController extends Controller
    {

        public function create()
        {
<<<<<<< HEAD
            return view('auth.create');
=======
            return view('auth.register.create');
>>>>>>> bafa905f7d8ee7d604d7a841a02069c14cb11783
        }

        public function store()
        {

          $attributes =  request()->validate([
<<<<<<< HEAD
                'username' => "required|max:30|min:3|unique:users,username",
                'name' =>   ['required', 'max:255', 'min:5'],
                'email' =>  ['required', 'max:255', 'email'],
                'password' => ['required', 'max:255', 'min:6','confirmed']
            ]);
            User::create($attributes);
            return view('/posts');
=======
                'username' => ["required","max:30","min:3",Rule::unique('users','username')],// one way to validate the username
                'name' =>   ['required', 'max:255', 'min:5'],
                'email' =>  ['required', 'max:255', 'email',"unique:users,email"],// you can use this approach to the username as well
                'password' => ['required', 'max:255', 'min:6','confirmed']
            ]);
            $user = User::create($attributes);
            Auth::login($user);
            session()->flash('success', 'Your account has been created');
            return redirect('/posts');
>>>>>>> bafa905f7d8ee7d604d7a841a02069c14cb11783
        }
    }










      // 'password' => [
      //       'required',
      //       'confirmed',
      //       Password::min(8)
      //           ->mixedCase()
      //           ->letters()
      //           ->numbers()
      //           ->symbols()
      //           ->uncompromised(),
      //   ],
