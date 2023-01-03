<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backgrounds extends Model
{
    protected $fillable = [
        'background_name'
      ];

    public function Spells()
    {
        return $this->belongsToMany(Spells::class);
      }
}
