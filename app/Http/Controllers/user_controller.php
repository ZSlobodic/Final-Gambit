<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\user_controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class user_controller extends Controller
{
  public function index(Request $request)
  {
    $users = DB::table('users')
      -> get();

    return view('auth.users', ['users' => $users]);
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