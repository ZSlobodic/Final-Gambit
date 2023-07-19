<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CharacterController;
use App\Models\Character;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
      $characters = Character::all();

      return view('characters.index', ['characters' => $characters]);
    }

    public function createCharacter(Request $request)
    { 
      //dd($request->all());
      $data = $request->all();
      $data['class_name'] = 'Wizard';

      $character = Character::create($data);
      //dd($character);
      return redirect()->route('characters.index');
    }

    public function show($id)
    {
      $character = Character::find($id);

      return view('characters.show')->with('character', $character);
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

}