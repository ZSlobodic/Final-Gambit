<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subclasses extends Model
{
    protected $fillable = [
        'subclass_name'
      ];

    public function Spells()
    {
        return $this->belongsToMany(Spells::class);
      }
}