<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\feats_controller;
use App\Models\Feats;
use Illuminate\Support\Facades\DB;
use Auth;

class feats_controller extends Controller
{
  public function index(Request $request)
  {
    $feats = DB::table('feats')
      -> get();


    $users = DB::table('users')
      -> get();

    $user = Auth::user();

    if ($user == NULL){
      $is_logged_in = 0;
    }else{
      $is_logged_in = 1;
    }

    return view('feats.index', ['feats' => $feats,
    'users' => $users,
    'user' => $user,
    'is_logged_in' => $is_logged_in]);
  }

    public function getcreateFeat(Request $request)
      {
        return view('feats.create_feat');
      }

    public function createFeat(Request $request)
        { 
          /*dd($request);*/
          $item = new Feats();
          $item->feat_name = $request->feat_name;
          $item->save();

          return view('feats.create_feat');
        }

    public function editFeat(int $id)
        {
          $feat = DB::table('feats')
              ->where('id', '=', $id)
              ->first();
          return view('feats.edit',compact('feat'));
        }
    
    public function updateFeat(Request $request, int $id)
        {
    
          $request->validate([
            'feat_name' => 'required',
          ]);
    
    
          $feat = DB::table('feats')
            ->where('id', '=', $id)
            ->update(['feat_name' => $request->feat_name
            /*'place' => $request->place,
            'procent' => $request->procent, 
            'scanner_code' => $request->scanner_code*/ ]);
            return redirect()->route('feats.index')
            ->with('success','Feat updated successfully');
        }
    
        public function deleteFeat(int $id)
        {
          $feat = DB::table('feats')
          ->where('id', '=', $id)
          ->delete();

          return redirect()->route('feats.index')
          ->with('success','Feat deleted successfully.');
        }
}