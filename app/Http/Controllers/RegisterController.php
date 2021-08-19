<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\User;
    class RegisterController extends Controller
    {

        public function create()
        {
            return view('auth.create');
        }

        public function store()
        {

          $attributes =  request()->validate([
                'username' => "required|max:30|min:3|unique:users,username",
                'name' =>   ['required', 'max:255', 'min:5'],
                'email' =>  ['required', 'max:255', 'email'],
                'password' => ['required', 'max:255', 'min:6','confirmed']
            ]);
            User::create($attributes);
            return view('/posts');
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
