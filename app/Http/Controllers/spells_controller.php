<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\spells_controller;
use App\Models\Spell;
use Illuminate\Support\Facades\DB;
use Auth;

class spells_controller extends Controller
{
    public function index(Request $request)
    {
      $spells = DB::table('spells')
      ->where([['spell_name', '!=', Null],
        [function ($query) use ($request)
        {
            if(($SNquery = $request->SNquery))
            {
                $query->orWhere('spell_name','LIKE','%' . $SNquery . '%')
                //->orWhere('description','LIKE','%' . $search_reference . '%')
                //->orWhere('scanner_code','LIKE','%' . $search_reference . '%')
                ->get();
            }
        }]
        ])
        
      ->where([['level', '!=', Null],
        [function ($query) use ($request)
        {
            if(($SLquery = $request->SLquery))
            {
                $query->orWhere('level','LIKE','%' . $SLquery . '%')
                //->orWhere('description','LIKE','%' . $search_reference . '%')
                //->orWhere('scanner_code','LIKE','%' . $search_reference . '%')
                ->get();
            }
        }]
        ])
      
      ->where([['school', '!=', Null],
        [function ($query) use ($request)
        {
            if(($SSquery = $request->SSquery))
            {
                $query->orWhere('school','LIKE','%' . $SSquery . '%')
                //->orWhere('description','LIKE','%' . $search_reference . '%')
                //->orWhere('scanner_code','LIKE','%' . $search_reference . '%')
                ->get();
            }
        }]
        ])

      -> get();

      if ($request -> SNquery == Null){
        $spell = DB::table('spells')
        ->where('id', '=', '1')
        ->first();
      } else {
        $spell = DB::table('spells')
        ->where([['spell_name', '!=', Null],
        [function ($query) use ($request)
        {
            if(($SNquery = $request->SNquery))
            {
                $query->orWhere('spell_name','LIKE','%' . $SNquery . '%')
                //->orWhere('description','LIKE','%' . $search_reference . '%')
                //->orWhere('scanner_code','LIKE','%' . $search_reference . '%')
                ->get();
            }
        }]
        ])
        -> first();
      }
      /*$spell = DB::table('spells')
      ->where('id', '=', '1')
      ->first();*/
      $classes = DB::table('classes')
      -> get();
      $subclasses = DB::table('subclasses')
      -> get();
      $races = DB::table('races')
      -> get();
      $backgrounds = DB::table('backgrounds')
      -> get();
      $feats = DB::table('feats')
      -> get();
      //dd($request);
      

      $users = DB::table('users')
      -> get();

      $user = Auth::user();

      if ($user == NULL){
        $is_logged_in = 0;
      }else{
        $is_logged_in = 1;
      }

      return view('spells.index', [
        'spells' => $spells,
        'shown_spell' => $spell,
        'classes' => $classes,
        'subclasses' => $subclasses,
        'races' => $races,
        'backgrounds' => $backgrounds,
        'feats' => $feats,
        'user' => $user,
        'is_logged_in' => $is_logged_in
      ]);
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
    public function importSpells($spells){ 
          /*dd($request);*/
          foreach($spells as $spell){
            $exists = DB::table('spells')
            ->where('spell_name', '=', $spell->name)
            ->first();
            if (!$exists){
              $item = new Spell();
              $item->spell_name = $spell->name;
              $item->school = $spell->school;
              $item->level = $spell->level;
              $item->type = $spell->type;
              $item->ritual = $spell->ritual;
              $item->casting_time = $spell->casting_time;
              $item->range = $spell->range;
              $item->somatic = $spell->components->somatic;
              $item->vocal = $spell->components->verbal;
              $item->material = $spell->components->material;
              if (isset($spell->components->materials_needed)){
                $item->components = $spell->components->materials_needed[0];
              }
              else{
                $item->components = false;
              }
              $item->concentration = str_contains( $spell->duration, "Concentration" ) ? true : false;
              $item->duration = $spell->duration;
              $item->description = $spell->description;
              if (isset($spell->higher_levels)){
                $item->at_higher_levels = $spell->higher_levels;
              }
              $item->save();
            }

          }
    }

    
    public function editSpell(int $id)
    {
      $spell = DB::table('spells')
          ->where('id', '=', $id)
          ->first();
      return view('spells.edit',compact('spell'));
    }

    public function updateSpell(Request $request, int $id)
    {

        $request->validate([
          'spell_name' => 'required',
          'school' => 'required',
          'casting_time' => 'required',
          'range' => 'required',
          'duration' => 'required',
          'description' => 'required',
        ]);


        $spell = DB::table('spells')
            ->where('id', '=', $id)
            ->update(['spell_name' => $request->spell_name,
            'school' => $request->school,
            'level' => $request->level,
            'ritual' => $request->ritual,
            'casting_time' => $request->casting_time,
            'range' => $request->range,
            'target' => $request->target,
            'somatic' => $request->somatic,
            'vocal' => $request->vocal,
            'material' => $request->material,
            'components' => $request->components,
            'concentration' => $request->concentration,
            'duration' => $request->duration,
            'description' => $request->description,
            'at_higher_levels' => $request->at_higher_levels ]);
            return redirect()->route('spells.index')
            ->with('success','Spell updated successfully');
    }

    public function deleteSpell(int $id)
    {
      $spell = DB::table('spells')
      ->where('id', '=', $id)
      ->delete();

      return redirect()->route('spells.index')
      ->with('success','Spell deleted successfully.');
    }

    public function showSpell(int $id, Request $request)
    {
      $spell = DB::table('spells')
      ->where('id', '=', $id)
      ->first();
      //dd($request);
      $spells = DB::table('spells')
      -> get();
      $classes = DB::table('classes')
      -> get();
      $subclasses = DB::table('subclasses')
      -> get();
      $races = DB::table('races')
      -> get();
      $backgrounds = DB::table('backgrounds')
      -> get();
      $feats = DB::table('feats')
      -> get();
      //dd($classes);

      $user = Auth::user();

      if ($user == NULL){
        $is_logged_in = 0;
      }else{
        $is_logged_in = 1;
      }
      
      return view('spells.index', [
        'spells' => $spells,
        'shown_spell' => $spell,
        'classes' => $classes,
        'subclasses' => $subclasses,
        'races' => $races,
        'backgrounds' => $backgrounds,
        'feats' => $feats,
        'user' => $user,
        'is_logged_in' => $is_logged_in
      ]);

      /*$lists = [];
      foreach($request -> class as $key => $class){
        switch ($class) {
          case ("Artificer"):
            $lists[] = 'Artificer';
            //dd($request);
            //break;
          case ("Bard"):
            $lists[] = 'Bard';
            dd($request, $lists);
        }
      }*/
    }    
}