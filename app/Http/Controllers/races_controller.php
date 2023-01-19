<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\races_controller;
use App\Models\Races;
use Illuminate\Support\Facades\DB;

class races_controller extends Controller
{
  public function index(Request $request)
  {
    $races = DB::table('races')
      -> get();

    return view('races.index', ['races' => $races]);
  }

    public function getcreateRace(Request $request)
      {
        return view('races.create_race');
      }

    public function createRace(Request $request)
        { 
          /*dd($request);*/
          $item = new Races();
          $item->race_name = $request->race_name;
          $item->save();

          return view('races.create_race');
        }
}