<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\backgrounds_controller;
use App\Models\Backgrounds;
use Illuminate\Support\Facades\DB;
use Auth;

class backgrounds_controller extends Controller
{
  public function index(Request $request)
  {
    $backgrounds = DB::table('backgrounds')
      -> get();

    $users = DB::table('users')
      -> get();

    $user = Auth::user();

    if ($user == NULL){
      $is_logged_in = 0;
    }else{
      $is_logged_in = 1;
    }

    return view('backgrounds.index', ['backgrounds' => $backgrounds,
    'users' => $users,
    'user' => $user,
    'is_logged_in' => $is_logged_in]);
  }

    public function getcreateBackground(Request $request)
      {
        return view('backgrounds.create_background');
      }

    public function createBackground(Request $request)
        { 
          /*dd($request);*/
          $item = new Backgrounds();
          $item->background_name = $request->background_name;
          $item->save();

          return view('backgrounds.create_background');
        }

    public function editBackground(int $id)
    {
      $background = DB::table('backgrounds')
          ->where('id', '=', $id)
          ->first();
      return view('backgrounds.edit',compact('background'));
    }

    public function updateBackground(Request $request, int $id)
    {

        $request->validate([
          'background_name' => 'required',
        ]);


        $background = DB::table('backgrounds')
          ->where('id', '=', $id)
          ->update(['background_name' => $request->background_name
            /*'place' => $request->place,
            'procent' => $request->procent, 
            'scanner_code' => $request->scanner_code*/ ]);
        return redirect()->route('backgrounds.index')
          ->with('success','Background updated successfully');
    }

    public function deleteBackground(int $id)
    {
      $background = DB::table('backgrounds')
      ->where('id', '=', $id)
      ->delete();

      return redirect()->route('backgrounds.index')
      ->with('success','Background deleted successfully.');
    }
}