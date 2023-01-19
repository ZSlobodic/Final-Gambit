<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\subclasses_controller;
use App\Models\Subclasses;
use Illuminate\Support\Facades\DB;

class subclasses_controller extends Controller
{
  public function index(Request $request)
  {
    $subclasses = DB::table('subclasses')
      -> get();

    return view('subclasses.index', ['subclasses' => $subclasses]);
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
}