<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\feats_controller;
use App\Models\Feats;
use Illuminate\Support\Facades\DB;

class feats_controller extends Controller
{
  public function index(Request $request)
  {
    $feats = DB::table('feats')
      -> get();

    return view('feats.index', ['feats' => $feats]);
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
}