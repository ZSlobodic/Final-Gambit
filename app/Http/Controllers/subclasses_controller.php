<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\subclasses_controller;
use App\Models\Subclasses;
use Illuminate\Support\Facades\DB;
use Auth;

class subclasses_controller extends Controller
{
  public function index(Request $request)
  {
    $subclasses = DB::table('subclasses')
      -> get();

    $users = DB::table('users')
      -> get();

    $user = Auth::user();

    if ($user == NULL){
      $is_logged_in = 0;
    }else{
      $is_logged_in = 1;
    }

    return view('subclasses.index', ['subclasses' => $subclasses,
    'users' => $users,
    'user' => $user,
    'is_logged_in' => $is_logged_in]);
  }

    public function getcreateSubclass(Request $request)
      {
        return view('subclasses.create_subclass');
      }

    public function createSubclass(Request $request)
        { 
          /*dd($request);*/
          $item = new Subclasses();
          $item->subclass_name = $request->subclass_name;
          $item->save();

          return view('subclasses.create_subclass');
        }

    public function editSubclass(int $id)
    {
      $subclass = DB::table('subclasses')
          ->where('id', '=', $id)
          ->first();
      return view('subclasses.edit',compact('subclass'));
    }

    public function updateSubclass(Request $request, int $id)
    {

        $request->validate([
          'subclass_name' => 'required',
        ]);


        $subclass = DB::table('subclasses')
            ->where('id', '=', $id)
            ->update(['subclass_name' => $request->subclass_name
            /*'place' => $request->place,
            'procent' => $request->procent, 
            'scanner_code' => $request->scanner_code*/ ]);
            return redirect()->route('subclasses.index')
            ->with('success','Subclass updated successfully');
    }

    public function deleteSubclass(int $id)
    {
      $subclass = DB::table('subclasses')
      ->where('id', '=', $id)
      ->delete();

      return redirect()->route('subclasses.index')
      ->with('success','Subclass deleted successfully.');
    }
}