<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
class SponsorsController extends Controller
{
     public function index()
     {
          $sponsors = Sponsor::latest();
          return view('accounts/admins/sponsors.index',
               [
                    'sponsors' =>$sponsors->Paginate(20)
               ]);
     }
      public function create()
      {
          return view('accounts/admins/sponsors/create');
      }
      public function store()
      {
         $attributes = request()->validate([
               'ad' => 'required'
          ]);
          Sponsor::create($attributes);
      return redirect(route('sponsors'));
      }
}
