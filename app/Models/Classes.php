<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'class_name'
      ];

    public function Spells()
    {
        return $this->belongsToMany(Spells::class);
      }
}
