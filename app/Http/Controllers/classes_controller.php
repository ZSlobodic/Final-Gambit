<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\classes_controller;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;

class classes_controller extends Controller
{
    public function index(Request $request)
    {
      $classes = DB::table('classes')
        -> get();

      return view('classes.index', ['classes' => $classes]);
    }

    public function getcreateClass(Request $request)
    {
      return view('classes.create_class');
    }

    public function createClass(Request $request)
    { 
      /*dd($request);*/
      $item = new Classes();
      $item->class_name = $request->class_name;
      $item->save();

      return view('classes.create_class');
    }

    public function editClass(int $id)
    {
      $class = DB::table('classes')
          ->where('id', '=', $id)
          ->first();
      return view('classes.edit',compact('class'));
    }

    public function updateClass(Request $request, Classes $class)
    {

        $request->validate([
          'class_name' => 'required',
        ]);


        $material->update($request->all());
        return redirect()->route('materials.index')
          ->with('success','Material updated successfully');
    }

    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('materials.index')
        ->with('success','Material deleted successfully');
    }
}