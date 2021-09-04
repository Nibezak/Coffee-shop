<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminUsersController extends Controller
{

    public function dashboard(User $authors)
    {
    $authors = User::latest();
    return view('accounts.admins.profile',[
        'authors' =>$authors->Paginate(6),
    ]);
    }

    public function destroy(User $author)
    {
    $author->delete();
    return redirect('accounts/profile')->with('success', $author->name . ' Has been deleted');
    }
}
