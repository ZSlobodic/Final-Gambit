<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\classes_controller;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;
use Auth;

class classes_controller extends Controller
{
    public function index(Request $request)
    {
      $classes = DB::table('classes')
        -> get();

      $users = DB::table('users')
        -> get();
  
      $user = Auth::user();
  
      if ($user == NULL){
        $is_logged_in = 0;
      }else{
        $is_logged_in = 1;
      }

      return view('classes.index', ['classes' => $classes,
      'users' => $users,
      'user' => $user,
      'is_logged_in' => $is_logged_in]);
    }

    public function getcreateClass(Request $request)
    {
      return view('classes.create_class');
    }

    public function createClass(Request $request)
    { 
      /*dd($request);*/
      $item = new Classes();
      $item->class_name = $request->class_name;
      $item->save();

      return view('classes.create_class');
    }

    public function editClass(int $id)
    {
      $class = DB::table('classes')
          ->where('id', '=', $id)
          ->first();
      return view('classes.edit',compact('class'));
    }

    public function updateClass(Request $request, int $id)
    {
        //dd($request, $class);
        $request->validate([
          'class_name' => 'required',
        ]);


        $class = DB::table('classes')
          ->where('id', '=', $id)
          ->update(['class_name' => $request->class_name
            /*'place' => $request->place,
            'procent' => $request->procent, 
            'scanner_code' => $request->scanner_code*/ ]);
        return redirect()->route('classes.index')
          ->with('success','Class updated successfully');
    }

    public function deleteClass(int $id)
    {
      $class = DB::table('classes')
      ->where('id', '=', $id)
      ->delete();

      return redirect()->route('classes.index')
      ->with('success','Class deleted successfully.');
    }
}