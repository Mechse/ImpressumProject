<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin(){
          return view('login.login');
   }

   public function showRegister(){
         return view('login.register');
  }

  public function checkLogin(){
        $usr = User::where('email', request('inputEmail'))->first();
        if($usr) {
             $raw_entries = DB::table('web_raws')->where('status', '=', 1)->simplePaginate(15);
             return view('webraw.index', ['raw_entries' => $raw_entries, 'user' => $usr->name]);
      } else {
             return view('login.login');
      }
      return;
 }

 public function store() {
       $user = new User;
       $user->name = request('inputUsername');
       $user->email = request('inputUsername');
       $user->save();
       return view('login.login');
 }
}
