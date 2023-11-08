<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CharacterController;
use App\Models\Character;
use App\Models\Spell;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\spells_controller;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
      $characters = Character::all();

      return view('characters.index', ['characters' => $characters]);
    }

    public function createCharacter(Request $request)
    { 
      /*$data = $request->validate([
        'character_name' => 'required|string|max:100',
        'class_name' => 'nullable|string|max:100',
        'SAM' => 'nullable|string|max:100',
        'spells' => 'nullable|array',
        'added_spells' => 'exists:spells,id', // Validate each spell ID exists in the 'spells' table
      ]);*/

      $data = $request->all();


      $character = Character::create([
          'character_name' => $data['character_name'],
          'class_name' => $data['class_name'],
          'SAM' => $data['SAM'],
      ]);
      
      if (!empty($data['added_spells'])) {
          $character->spells()->attach($data['added_spells']);
      }
      
      return redirect()->route('characters.index');
      
      
      /*
      //dd($request->all());
      $data = $request->all();
      $data['class_name'] = 'Wizard';

      $character = Character::create($data);
      //dd($character);
      return redirect()->route('characters.index');
      */
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
   
        $character = Character::findOrFail($id);

        $character->character_name = $request->character_name;
        $character->class_name = $request->character_class;
        $character->SAM = $request->SAM;
        $character->save();
        
        $character->spells()->detach();


        if (!empty($request->added_spells)) {
            $character->spells()->attach($request->added_spells);
        }

        return redirect()->route('characters.index')
          ->with('success','Character updated successfully.');
    }

    public function prepareCreateCharacter(Request $request)
    {
      $classes = DB::table('classes')
        ->get();

      $spells = Spell::orderBy('spell_name', 'asc')
        ->get();
      
        /*$spells = DB::table('spells')
        ->orderBy('spell_name', 'asc')
        -> get();*/

      return view('characters.create_character', [
          'classes' => $classes,
          'title' => 'Create Character',
          'spells' => $spells,
          //'title' => 'Add Spells'
      ]);
      
        /*return view('characters.create_character', ['classes' => $classes, 'title' => 'Create Character', 'spells' => $spells, 'title' => 'Add Spells']);*/
    }

    public function deleteCharacter(int $id)
    {
      $characters = DB::table('characters')
      ->where('id', '=', $id)
      ->delete();

      return redirect()->route('characters.index')
      ->with('success','Character deleted successfully.');
    }

}
