<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\character_controller;
use App\Models\Characters;
use Illuminate\Support\Facades\DB;

class character_controller extends Controller
{
    public function index(Request $request)
    {
      $characters = Characters::all();

      return view('characters.characters', ['characters' => $characters]);
    }

    public function createCharacter(Request $request)
    { 
      //dd($request);
      $item = new Characters();
      $item->character_name = $request->character_name;
      $item->class_name = $request->character_class;
      $item->spell_name = $request->added_spells;
      $item->SAM = $request->SAM;
      $item->save();

      return redirect()->route('characters.characters');
    }

    public function editCharacter(int $id)
    {
      $classes = DB::table('classes')
        -> get();

      $spells = DB::table('spells')
        -> get();
      
      $characters = DB::table('characters')
          ->where('id', '=', $id)
          ->first();
      return view('characters.edit_character', compact('characters'), ['classes' => $classes, 'spells' => $spells]);
    }

    public function updateCharacter(Request $request, int $id)
    {
        //dd($request, $class);
        $request->validate([
          'character_name' => 'required',
          'SAM' => 'required'
        ]);


        $characters = DB::table('characters')
          ->where('id', '=', $id)
          ->update(['character_name' => $request->character_name,
            'class_name' => $request->character_class,
            'spell_name' => $request->added_spells,
            'SAM' => $request->SAM
            /*'place' => $request->place,
            'procent' => $request->procent, 
            'scanner_code' => $request->scanner_code*/ ]);
        return redirect()->route('characters.characters')
          ->with('success','Character updated successfully.');
    }

    public function prepareCreateCharacter(Request $request)
    {
      $classes = DB::table('classes')
        -> get();

      $spells = DB::table('spells')
        ->orderBy('spell_name', 'asc')
        -> get();

      return view('characters.create_character', ['classes' => $classes, 'title' => 'Create Character', 'spells' => $spells, 'title' => 'Add Spells']);
    }

    public function deleteCharacter(int $id)
    {
      $characters = DB::table('characters')
      ->where('id', '=', $id)
      ->delete();

      return redirect()->route('characters.characters')
      ->with('success','Character deleted successfully.');
    }



    /*public function GiveSpell(Request $request, int $id)
    {
        $emptyArray = array();
        $x = 0;

        $character = DB::table('characters')
          ->where('id', '=',  $id)
          ->first();

        $spells = Spell::distinct()
          ->where('spell_name', '=', $request->spell)
          ->first();

        $spells->users()
          ->attach($character->id);

        $character = DB::table('characters')
          ->where('id', '=', $id)
          ->first();

        $spells = Spell::distinct()
          ->get();

        $character_spells = Character::with('spells')
        //->whereName($character->character_name)
          ->where('id', '=', $user->id)
          ->first();

        foreach ($spells as $temp)
        {
            $emptyArray[$x][0] =  $temp->spell_name;
            $emptyArray[$x][1] =  0;
            $x = $x + 1;
        }

        $x = 0;

        foreach ($spells as $temp)
        {
            foreach ($character_spells->spells as $spell)
            {
                if($spell->spell_name==$temp->spell_name)
                {
                    $emptyArray[$x][1] =  1;
                }
            }
            $x = $x + 1;
        }
        return view('', compact('character', 'spells', 'emptyArray'));
    }

    public function TakeSpell(Request $request, int $id)
    {
        $emptyArray = array();
        $x = 0;

        $character = DB::table('Characters')
          ->where('id', '=',  $id)
          ->first();

        $spells = Spell::distinct()
          ->where('spell_name', '=', $request->spell)
          ->first();

        $spells->characters()
          ->detach($spell->id);

        $spell = DB::table('Spells')
          ->where('id', '=', $id)
          ->first();

        $spells = Spell::distinct()
          ->get();

        $character_spells = Character::with('spells')
        //->whereName($character->character_name)
          ->where('id', '=', $character->id)
          ->first();

        foreach ($spells as $temp)
        {
            $emptyArray[$x][0] =  $temp->spell_name;
            $emptyArray[$x][1] =  0;
            $x = $x + 1;
        }

        $x = 0;

        foreach ($spells as $temp)
        {
            foreach ($character_spells->characters as $character)
            {
                if($spell->spell_name==$temp->spell_name)
                {
                    $emptyArray[$x][1] =  1;
                }
            }
            $x = $x + 1;
        }
        return view('', compact('character', 'spells', 'emptyArray'));
    }*/

}