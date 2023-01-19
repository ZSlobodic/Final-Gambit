<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\spells_controller;
use App\Models\Spells;
use Illuminate\Support\Facades\DB;

class spells_controller extends Controller
{
    public function index(Request $request)
    {
      $spells = DB::table('spells')
         -> get();

      return view('spells.index', ['spells' => $spells]);
    }

    public function getcreateSpell(Request $request)
      {
        return view('spells.create_spell');
      }

    public function createSpell(Request $request)
        { 
          /*dd($request);*/
          $item = new Spells();
          $item->spell_name = $request->spell_name;
          $item->school = $request->school;
          $item->level = $request->level;
          $item->ritual = $request->ritual;
          $item->casting_time = $request->casting_time;
          $item->range = $request->range;
          $item->target = $request->target;
          $item->somatic = $request->somatic;
          $item->vocal = $request->vocal;
          $item->material = $request->material;
          $item->components = $request->components;
          $item->concentration = $request->concentration;
          $item->duration = $request->duration;
          $item->description = $request->description;
          $item->at_higher_levels = $request->at_higher_levels;
          $item->save();

          return view('spells.create_spell');
        }
}
