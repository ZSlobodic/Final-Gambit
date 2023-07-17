<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    protected $fillable = [
        'character_name','SAM'
      ];


    public function Spells(): HasMany{
        return $this->belongsToMany(Spells::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }


    
}
