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

    public function editRace(int $id)
        {
          $race = DB::table('races')
              ->where('id', '=', $id)
              ->first();
          return view('races.edit',compact('race'));
        }
    
    public function updateRace(Request $request, int $id)
        {
    
            $request->validate([
              'race_name' => 'required',
            ]);
    
    
            $race = DB::table('races')
            ->where('id', '=', $id)
            ->update(['race_name' => $request->race_name
            /*'place' => $request->place,
            'procent' => $request->procent, 
            'scanner_code' => $request->scanner_code*/ ]);
            return redirect()->route('races.index')
            ->with('success','Race updated successfully');
        }
    
        public function deleteRace(int $id)
        {
          $race = DB::table('races')
          ->where('id', '=', $id)
          ->delete();

          return redirect()->route('races.index')
          ->with('success','Race deleted successfully.');
        }
}