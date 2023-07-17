<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feats extends Model
{
    protected $fillable = [
        'feat_name'
      ];

    public function Spells()
    {
      return $this->belongsToMany(Spells::class);
    }
}
