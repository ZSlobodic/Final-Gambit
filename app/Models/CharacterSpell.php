<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSpell extends Model
{
    use HasFactory;

    protected $table = 'character_spell';

    protected $primaryKey = 'id';

    //A character spell belongs to a character
    public function character()
    {
        return $this->belongsTo(Character::class);
    }

}
