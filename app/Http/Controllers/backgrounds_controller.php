<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\backgrounds_controller;
use App\Models\Backgrounds;
use Illuminate\Support\Facades\DB;

class backgrounds_controller extends Controller
{
  public function index(Request $request)
  {
    $backgrounds = DB::table('backgrounds')
      -> get();

    return view('backgrounds.index', ['backgrounds' => $backgrounds]);
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
}