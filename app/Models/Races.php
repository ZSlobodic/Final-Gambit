<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Races extends Model
{
    protected $fillable = [
        'race_name'
      ];

    public function Spells()
    {
      return $this->belongsToMany(Spells::class);
    }
}
