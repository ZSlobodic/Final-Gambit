<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\user_controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;

class user_controller extends Controller
{
  public function index(Request $request)
  {
    $users = DB::table('users')
      -> get();

    $user = Auth::user();

    if ($user == NULL){
      $is_logged_in = 0;
    }else{
      $is_logged_in = 1;
    }


    //dd($user);
    return view('auth.users', ['users' => $users,
    'user' => $user,
    'is_logged_in' => $is_logged_in]);

    //add use Auth; at the top
    //add $user = Auth::user(); in the index function
    //edit all other return views by adding 'user' => $user

    //To check if someone is logged in, copy the whole if and the is_logged_in deal
  }

  //Fetch Admin tools to be given
  public function FetchUsers(int $id)
        {
          $users = DB::table('users')
              ->where('id', '=', $id)
              ->first();
          return view('auth.is_user_admin',compact('users'));
        } 

  //Update Admin status
  public function HowToAdmin(Request $request, int $id)
  {
    $users = DB::table('users')
      ->where('id', '=', $id)
      ->update([
        'is_admin' => $request->is_admin,
      ]);
      return redirect()->route('auth.users')
      ->with('success','Admin privileges updated successfully.');
  }

}